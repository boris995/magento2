<?php

declare(strict_types=1);

namespace Boris\CategoryPage\Plugin;

use Magento\Catalog\Helper\Product as ProductHelper;
use Magento\Framework\App\RequestInterface;

class AllowHiddenProductView
{
    private RequestInterface $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }

    public function afterCanShow(ProductHelper $subject, bool $result): bool
    {
        if ($this->request->getParam('boris_allow_hidden_product')) {
            return true;
        }

        return $result;
    }
}
