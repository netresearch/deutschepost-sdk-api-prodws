<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class PriceDefinition
{
    /**
     * @var CurrencyAmountType $commercialGrossPrice
     */
    private $commercialGrossPrice;

    /**
     * @var ValidityType|null $priceValidity
     */
    private $priceValidity;

    public function getCommercialGrossPrice(): CurrencyAmountType
    {
        return $this->commercialGrossPrice;
    }

    public function getPriceValidity(): ?ValidityType
    {
        return $this->priceValidity;
    }
}
