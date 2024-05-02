<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Service\ProductInformationService;

use DeutschePost\Sdk\ProdWS\Api\Data\ValueInterface;

class Value implements ValueInterface
{
    public function __construct(private string $unit, private float $amount)
    {
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}
