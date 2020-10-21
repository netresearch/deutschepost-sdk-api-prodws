<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Service\ProductInformationService;

use DeutschePost\Sdk\ProdWS\Api\Data\ValueRangeInterface;

class ValueRange implements ValueRangeInterface
{
    /**
     * @var string
     */
    private $unit;

    /**
     * @var float
     */
    private $min;

    /**
     * @var float
     */
    private $max;

    public function __construct(string $unit, float $min, float $max)
    {
        $this->unit = $unit;
        $this->min = $min;
        $this->max = $max;
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
