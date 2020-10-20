<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class CurrencyAmountType
{
    /**
     * "+" or "-"
     *
     * @var string|null $sign
     */
    private $sign;

    /**
     * @var float $value
     */
    private $value;

    /**
     * Fixed, "EUR"
     *
     * @var string $currency
     */
    private $currency;

    /**
     * @var bool $calculated
     */
    private $calculated;

    public function getSign(): ?string
    {
        return $this->sign;
    }

    public function getValue(): float
    {
        return $this->value;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function isCalculated(): bool
    {
        return $this->calculated;
    }
}
