<?php

declare(strict_types=1);

namespace Boris\CategoryPage\Router;

use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
use Magento\Framework\App\Action\Forward;
use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\RouterInterface;
use Magento\Store\Model\StoreManagerInterface;

class CategoryKeyRouter implements RouterInterface
{
    private const RESERVED_PATHS = [
        'admin',
        'categories',
        'checkout',
        'customer',
        'catalogsearch',
        'contact',
        'cms',
        'rest',
        'graphql',
    ];

    private ActionFactory $actionFactory;
    private CollectionFactory $categoryCollectionFactory;
    private ProductCollectionFactory $productCollectionFactory;
    private StoreManagerInterface $storeManager;

    public function __construct(
        ActionFactory $actionFactory,
        CollectionFactory $categoryCollectionFactory,
        ProductCollectionFactory $productCollectionFactory,
        StoreManagerInterface $storeManager
    ) {
        $this->actionFactory = $actionFactory;
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        $this->productCollectionFactory = $productCollectionFactory;
        $this->storeManager = $storeManager;
    }

    public function match(RequestInterface $request)
    {
        $path = trim((string)$request->getPathInfo(), '/');
        $path = $this->normalizePath($path);

        if ($path === '' || str_contains($path, '.') || in_array($path, self::RESERVED_PATHS, true)) {
            return null;
        }

        $categoryId = $this->findCategoryIdByPath($path);
        if ($categoryId) {
            $request
                ->setModuleName('catalog')
                ->setControllerName('category')
                ->setActionName('view')
                ->setParam('id', $categoryId);

            return $this->actionFactory->create(Forward::class, ['request' => $request]);
        }

        $productId = $this->findProductIdByUrlKey($path);
        if (!$productId) {
            return null;
        }

        $request
            ->setModuleName('catalog')
            ->setControllerName('product')
            ->setActionName('view')
            ->setParam('id', $productId)
            ->setParam('boris_allow_hidden_product', 1);

        return $this->actionFactory->create(Forward::class, ['request' => $request]);
    }

    private function normalizePath(string $path): string
    {
        if (str_ends_with($path, '.html')) {
            return substr($path, 0, -5);
        }

        return $path;
    }

    private function findCategoryIdByPath(string $path): ?int
    {
        $rootId = (int)$this->storeManager->getStore()->getRootCategoryId();
        $collection = $this->categoryCollectionFactory->create();
        $collection
            ->addAttributeToSelect(['url_key', 'url_path', 'is_active'])
            ->addAttributeToFilter('is_active', 1)
            ->addAttributeToFilter('entity_id', ['neq' => $rootId])
            ->addAttributeToFilter('path', ['like' => '1/' . $rootId . '/%'])
            ->addAttributeToFilter([
                ['attribute' => 'url_key', 'eq' => $path],
                ['attribute' => 'url_path', 'eq' => $path],
            ])
            ->setPageSize(1);

        $category = $collection->getFirstItem();
        $categoryId = (int)$category->getId();

        return $categoryId > 0 ? $categoryId : null;
    }

    private function findProductIdByUrlKey(string $urlKey): ?int
    {
        $storeId = (int)$this->storeManager->getStore()->getId();
        $collection = $this->productCollectionFactory->create();
        $collection
            ->setStoreId($storeId)
            ->addAttributeToSelect(['url_key', 'url_path'])
            ->addAttributeToFilter([
                ['attribute' => 'url_key', 'eq' => $urlKey],
                ['attribute' => 'url_path', 'eq' => $urlKey],
                ['attribute' => 'url_path', 'eq' => $urlKey . '.html'],
            ])
            ->addStoreFilter($storeId)
            ->setPageSize(1);

        $product = $collection->getFirstItem();
        $productId = (int)$product->getId();

        return $productId > 0 ? $productId : null;
    }
}
