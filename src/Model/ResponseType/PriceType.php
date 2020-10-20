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

    /**
     * @return CurrencyAmountType|null
     */
    public function getCalculatedNetPrice(): ?CurrencyAmountType
    {
        return $this->calculatedNetPrice;
    }

    /**
     * @return CurrencyAmountType|null
     */
    public function getCalculatedGrossPrice(): ?CurrencyAmountType
    {
        return $this->calculatedGrossPrice;
    }

    /**
     * @return CurrencyAmountType|null
     */
    public function getCommercialBalance(): ?CurrencyAmountType
    {
        return $this->commercialBalance;
    }

    /**
     * @return CurrencyAmountType
     */
    public function getCommercialGrossPrice(): CurrencyAmountType
    {
        return $this->commercialGrossPrice;
    }

    /**
     * @return ValidityType|null
     */
    public function getPriceValidity(): ?ValidityType
    {
        return $this->priceValidity;
    }
}
