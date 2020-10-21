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
        // PHP SOAP sets this as string, although declared as "xs:decimal"
        return $this->value * 100 / 100;
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
