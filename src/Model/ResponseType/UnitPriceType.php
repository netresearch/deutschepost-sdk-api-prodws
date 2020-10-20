<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class UnitPriceType
{
    /**
     * @var CurrencyAmountType|null $netPrice
     */
    private $netPrice;

    /**
     * @var float $rate
     */
    private $rate;

    /**
     * @var CurrencyAmountType $grossPrice
     */
    private $grossPrice;

    /**
     * @var ValidityType|null $priceValidity
     */
    private $priceValidity;

    /**
     * @var TempPriceList|null $tempPriceList
     */
    private $tempPriceList;

    public function getNetPrice(): ?CurrencyAmountType
    {
        return $this->netPrice;
    }

    public function getRate(): float
    {
        return $this->rate;
    }

    public function getGrossPrice(): CurrencyAmountType
    {
        return $this->grossPrice;
    }

    public function getPriceValidity(): ?ValidityType
    {
        return $this->priceValidity;
    }

    public function getTempPriceList(): ?TempPriceList
    {
        return $this->tempPriceList;
    }
}
