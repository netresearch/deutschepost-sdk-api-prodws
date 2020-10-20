<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class PriceDefinitionType
{
    /**
     * @var PriceType|null $price
     */
    private $price;

    /**
     * @var TempPriceList|null $tempPriceList
     */
    private $tempPriceList;

    /**
     * @var PriceType|null $minimalPrice
     */
    private $minimalPrice;

    /**
     * @var PriceFormulaType|null $priceFormula
     */
    private $priceFormula;

    public function getPrice(): ?PriceType
    {
        return $this->price;
    }

    public function getTempPriceList(): ?TempPriceList
    {
        return $this->tempPriceList;
    }

    public function getMinimalPrice(): ?PriceType
    {
        return $this->minimalPrice;
    }

    public function getPriceFormula(): ?PriceFormulaType
    {
        return $this->priceFormula;
    }
}
