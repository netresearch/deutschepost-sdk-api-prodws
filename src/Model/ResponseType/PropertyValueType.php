<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class PropertyValueType
{
    /**
     * @var AlphanumericValueType|null $alphanumericValue
     */
    private $alphanumericValue;

    /**
     * @var NumericValueType|null $numericValue
     */
    private $numericValue;

    /**
     * @var bool|null $booleanValue
     */
    private $booleanValue;

    /**
     * @var DateValueType|null $dateValue
     */
    private $dateValue;

    /**
     * @var CurrencyValueType|null $currencyValue
     */
    private $currencyValue;

    /**
     * @var string|null $hyperlinkValue
     */
    private $hyperlinkValue;

    public function getAlphanumericValue(): ?AlphanumericValueType
    {
        return $this->alphanumericValue;
    }

    public function getNumericValue(): ?NumericValueType
    {
        return $this->numericValue;
    }

    public function getBooleanValue(): ?bool
    {
        return $this->booleanValue;
    }

    public function getDateValue(): ?DateValueType
    {
        return $this->dateValue;
    }

    public function getCurrencyValue(): ?CurrencyValueType
    {
        return $this->currencyValue;
    }

    public function getHyperlinkValue(): ?string
    {
        return $this->hyperlinkValue;
    }
}
