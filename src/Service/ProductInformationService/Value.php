<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Service\ProductInformationService;

use DeutschePost\Sdk\ProdWS\Api\Data\ValueInterface;

class Value implements ValueInterface
{
    /**
     * @var string
     */
    private $unit;

    /**
     * @var float
     */
    private $amount;

    public function __construct(string $unit, float $amount)
    {
        $this->unit = $unit;
        $this->amount = $amount;
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
