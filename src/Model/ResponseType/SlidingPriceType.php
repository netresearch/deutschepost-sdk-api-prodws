<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class SlidingPriceType
{
    /**
     * @var NumericValueType $slidingScale
     */
    private $slidingScale;

    /**
     * @var UnitPriceType $price
     */
    private $price;

    public function getSlidingScale(): NumericValueType
    {
        return $this->slidingScale;
    }

    public function getPrice(): UnitPriceType
    {
        return $this->price;
    }
}
