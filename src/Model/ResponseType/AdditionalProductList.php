<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class AdditionalProductList
{
    /**
     * @var AdditionalProductType|AdditionalProductType[] $AdditionalProduct
     */
    private $AdditionalProduct;

    /**
     * @return AdditionalProductType[]
     */
    public function getAdditionalProducts(): array
    {
        if (empty($this->AdditionalProduct)) {
            return [];
        }

        if ($this->AdditionalProduct instanceof AdditionalProductType) {
            return [$this->AdditionalProduct];
        }

        return $this->AdditionalProduct;
    }
}
