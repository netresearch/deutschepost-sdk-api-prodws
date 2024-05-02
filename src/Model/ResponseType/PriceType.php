<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class PriceType
{
    /**
     * @var CurrencyAmountType|null $calculatedNetPrice
     */
    private $calculatedNetPrice;

    /**
     * @var CurrencyAmountType|null $calculatedGrossPrice
     */
    private $calculatedGrossPrice;

    /**
     * @var CurrencyAmountType|null $commercialBalance
     */
    private $commercialBalance;

    /**
     * @var CurrencyAmountType $commercialGrossPrice
     */
    private $commercialGrossPrice;

    /**
     * @var ValidityType|null $priceValidity
     */
    private $priceValidity;

    public function getCalculatedNetPrice(): ?CurrencyAmountType
    {
        return $this->calculatedNetPrice;
    }

    public function getCalculatedGrossPrice(): ?CurrencyAmountType
    {
        return $this->calculatedGrossPrice;
    }

    public function getCommercialBalance(): ?CurrencyAmountType
    {
        return $this->commercialBalance;
    }

    public function getCommercialGrossPrice(): CurrencyAmountType
    {
        return $this->commercialGrossPrice;
    }

    public function getPriceValidity(): ?ValidityType
    {
        return $this->priceValidity;
    }
}
