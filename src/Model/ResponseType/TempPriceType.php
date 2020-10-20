<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class TempPriceType
{
    /**
     * @var PriceType $price
     */
    private $price;

    /**
     * @var TimestampType $validFrom
     */
    private $validFrom;

    /**
     * @var TimestampType $validTo
     */
    private $validTo;

    public function getPrice(): PriceType
    {
        return $this->price;
    }

    public function getValidFrom(): TimestampType
    {
        return $this->validFrom;
    }

    public function getValidTo(): TimestampType
    {
        return $this->validTo;
    }
}
