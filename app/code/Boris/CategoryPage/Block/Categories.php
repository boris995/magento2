<?php

declare(strict_types=1);

namespace Boris\CategoryPage\Block;

use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\StoreManagerInterface;

class Categories extends Template
{
    private CollectionFactory $categoryCollectionFactory;
    private StoreManagerInterface $storeManager;

    public function __construct(
        Context $context,
        CollectionFactory $categoryCollectionFactory,
        StoreManagerInterface $storeManager,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        $this->storeManager = $storeManager;
    }

    public function getCategories(): array
    {
        $rootId = (int)$this->storeManager->getStore()->getRootCategoryId();
        $collection = $this->categoryCollectionFactory->create();
        $collection
            ->addAttributeToSelect(['name', 'description', 'url_key', 'url_path', 'is_active', 'include_in_menu'])
            ->addAttributeToFilter('is_active', 1)
            ->addAttributeToFilter('include_in_menu', 1)
            ->addAttributeToFilter('entity_id', ['neq' => $rootId])
            ->addAttributeToFilter('path', ['like' => '1/' . $rootId . '/%'])
            ->addUrlRewriteToResult()
            ->setOrder('level', 'ASC')
            ->setOrder('position', 'ASC');

        return $collection->getItems();
    }

    public function getCategoryDescription($category): string
    {
        $description = trim(strip_tags((string)$category->getDescription()));

        if ($description === '') {
            return (string)__('Browse available football jerseys in this collection.');
        }

        return mb_substr($description, 0, 140);
    }

    public function getCleanCategoryUrl($category): string
    {
        $path = trim((string)($category->getUrlPath() ?: $category->getUrlKey()), '/');

        if ($path === '') {
            return '#';
        }

        return $this->getUrl($path);
    }
}
