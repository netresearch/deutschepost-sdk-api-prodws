<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ShortSalesProductList
{
    /**
     * @var ShortSalesProductType|ShortSalesProductType[] $ShortSalesProduct
     */
    private $ShortSalesProduct;

    /**
     * @return ShortSalesProductType[]
     */
    public function getShortSalesProducts(): array
    {
        if (empty($this->ShortSalesProduct)) {
            return [];
        }

        if ($this->ShortSalesProduct instanceof ShortSalesProductType) {
            return [$this->ShortSalesProduct];
        }

        return $this->ShortSalesProduct;
    }
}
