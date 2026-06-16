<?php

declare(strict_types=1);

namespace Boris\CategoryPage\ViewModel;

use Magento\Catalog\Model\Category;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Catalog\Model\Product;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Store\Model\StoreManagerInterface;

class CategoryProducts implements ArgumentInterface
{
    private ProductRepositoryInterface $productRepository;
    private ResourceConnection $resourceConnection;
    private StoreManagerInterface $storeManager;
    private UrlInterface $urlBuilder;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        ResourceConnection $resourceConnection,
        StoreManagerInterface $storeManager,
        UrlInterface $urlBuilder
    ) {
        $this->productRepository = $productRepository;
        $this->resourceConnection = $resourceConnection;
        $this->storeManager = $storeManager;
        $this->urlBuilder = $urlBuilder;
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

            $products[] = $product;
        }

        return $products;
    }

    public function getProductUrl(Product $product): string
    {
        $urlKey = trim((string)$product->getUrlKey(), '/');
        if ($urlKey === '') {
            return (string)$product->getProductUrl();
        }

        return $this->urlBuilder->getDirectUrl($urlKey);
    }

    /**
     * @return array{is_in_stock: bool|null, qty: float|null}
     */
    public function getStockData(Product $product): array
    {
        $connection = $this->resourceConnection->getConnection();
        $stockItemTable = $this->resourceConnection->getTableName('cataloginventory_stock_item');

        if ($connection->isTableExists($stockItemTable)) {
            $row = $connection->fetchRow(
                $connection->select()
                    ->from($stockItemTable, ['qty', 'is_in_stock'])
                    ->where('product_id = ?', (int)$product->getId())
                    ->order('stock_id ASC')
                    ->limit(1)
            );

            if ($row) {
                return [
                    'is_in_stock' => (bool)$row['is_in_stock'],
                    'qty' => isset($row['qty']) ? (float)$row['qty'] : null,
                ];
            }
        }

        $stockStatusTable = $this->resourceConnection->getTableName('cataloginventory_stock_status');
        if ($connection->isTableExists($stockStatusTable)) {
            $row = $connection->fetchRow(
                $connection->select()
                    ->from($stockStatusTable, ['stock_status', 'qty'])
                    ->where('product_id = ?', (int)$product->getId())
                    ->order('website_id ASC')
                    ->limit(1)
            );

            if ($row) {
                return [
                    'is_in_stock' => (bool)$row['stock_status'],
                    'qty' => isset($row['qty']) ? (float)$row['qty'] : null,
                ];
            }
        }

        return ['is_in_stock' => null, 'qty' => null];
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
