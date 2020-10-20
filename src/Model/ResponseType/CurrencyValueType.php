<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class CurrencyValueType
{
    /**
     * @var CurrencyAmountType|null $minValue
     */
    private $minValue;

    /**
     * @var CurrencyAmountType|null $maxValue
     */
    private $maxValue;

    /**
     * @var CurrencyAmountType|null $fixValue
     */
    private $fixValue;

    public function getMinValue(): ?CurrencyAmountType
    {
        return $this->minValue;
    }

    public function getMaxValue(): ?CurrencyAmountType
    {
        return $this->maxValue;
    }

    public function getFixValue(): ?CurrencyAmountType
    {
        return $this->fixValue;
    }
}
