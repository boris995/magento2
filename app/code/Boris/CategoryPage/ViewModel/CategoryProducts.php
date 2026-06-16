<?php

declare(strict_types=1);

namespace Boris\CategoryPage\ViewModel;

use Magento\Catalog\Model\Category;
use Magento\Catalog\Model\Product\Attribute\Source\Status;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\Product;
use Magento\Catalog\Model\Product\Visibility;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\StoreManagerInterface;

class CategoryProducts implements ArgumentInterface
{
    private ProductRepositoryInterface $productRepository;
    private ResourceConnection $resourceConnection;
    private StoreManagerInterface $storeManager;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        ResourceConnection $resourceConnection,
        StoreManagerInterface $storeManager
    ) {
        $this->productRepository = $productRepository;
        $this->resourceConnection = $resourceConnection;
        $this->storeManager = $storeManager;
    }

    /**
     * @return Product[]
     */
    public function getAssignedProducts(Category $category): array
    {
        $storeId = (int)$this->storeManager->getStore()->getId();
        $productIds = $this->getAssignedProductIds((int)$category->getId());
        $products = [];

        foreach ($productIds as $productId) {
            try {
                $product = $this->productRepository->getById($productId, false, $storeId);
            } catch (NoSuchEntityException $exception) {
                continue;
            }

            if ((int)$product->getStatus() !== Status::STATUS_ENABLED) {
                continue;
            }

            if (!in_array((int)$product->getVisibility(), [
                Visibility::VISIBILITY_IN_CATALOG,
                Visibility::VISIBILITY_IN_SEARCH,
                Visibility::VISIBILITY_BOTH,
            ], true)) {
                continue;
            }

            $products[] = $product;
        }

        return $products;
    }

    private function getAssignedProductIds(int $categoryId): array
    {
        $connection = $this->resourceConnection->getConnection();
        $table = $this->resourceConnection->getTableName('catalog_category_product');
        $select = $connection->select()
            ->from($table, ['product_id'])
            ->where('category_id = ?', $categoryId)
            ->order('position ASC');

        return array_map('intval', $connection->fetchCol($select));
    }
}
