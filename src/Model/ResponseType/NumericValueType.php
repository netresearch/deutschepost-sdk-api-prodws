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
        if ($this->minValue === null) {
            return $this->minValue;
        }

        // PHP SOAP sets this as string, although declared as "xs:decimal"
        return $this->minValue * 100 / 100;
    }

    public function getMaxValue(): ?float
    {
        if ($this->maxValue === null) {
            return $this->maxValue;
        }

        // PHP SOAP sets this as string, although declared as "xs:decimal"
        return $this->maxValue * 100 / 100;
    }

    public function getFixValue(): ?float
    {
        if ($this->fixValue === null) {
            return $this->fixValue;
        }

        // PHP SOAP sets this as string, although declared as "xs:decimal"
        return $this->fixValue * 100 / 100;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }
}
