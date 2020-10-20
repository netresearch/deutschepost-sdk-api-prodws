<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class SalesProductList
{
    /**
     * @var SalesProductType|SalesProductType[] $SalesProduct
     */
    private $SalesProduct;

    /**
     * @return SalesProductType[]
     */
    public function getSalesProducts(): array
    {
        if (empty($this->SalesProduct)) {
            return [];
        }

        if ($this->SalesProduct instanceof SalesProductType) {
            return [$this->SalesProduct];
        }

        return $this->SalesProduct;
    }
}
