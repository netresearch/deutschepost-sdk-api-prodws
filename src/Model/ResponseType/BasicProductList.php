<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class BasicProductList
{
    /**
     * @var BasicProductType|BasicProductType[] $BasicProduct
     */
    private $BasicProduct;

    /**
     * @return BasicProductType[]
     */
    public function getBasicProducts(): array
    {
        if (empty($this->BasicProduct)) {
            return [];
        }

        if ($this->BasicProduct instanceof BasicProductType) {
            return [$this->BasicProduct];
        }

        return $this->BasicProduct;
    }
}
