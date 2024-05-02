<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Service\ProductInformationService;

use DeutschePost\Sdk\ProdWS\Api\Data\ValueRangeInterface;

class ValueRange implements ValueRangeInterface
{
    public function __construct(private string $unit, private float $min, private float $max)
    {
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function getMin(): float
    {
        return $this->min;
    }

    public function getMax(): float
    {
        return $this->max;
    }
}
