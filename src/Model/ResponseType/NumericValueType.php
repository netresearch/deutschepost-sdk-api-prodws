<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class NumericValueType
{
    /**
     * @var float|null $minValue
     */
    private $minValue;

    /**
     * @var float|null $maxValue
     */
    private $maxValue;

    /**
     * @var float|null $fixValue
     */
    private $fixValue;

    /**
     * @var string|null $unit
     */
    private $unit;

    public function getMinValue(): ?float
    {
        return $this->minValue;
    }

    public function getMaxValue(): ?float
    {
        return $this->maxValue;
    }

    public function getFixValue(): ?float
    {
        return $this->fixValue;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }
}
