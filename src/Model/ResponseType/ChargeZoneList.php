<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ChargeZoneList
{
    /**
     * @var string|null $operator
     */
    private $operator;

    /**
     * @var string|string[] $chargeZone_shortName
     */
    private $chargeZone_shortName;

    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @return string[]
     */
    public function getChargeZoneShortNames(): array
    {
        if (empty($this->chargeZone_shortName)) {
            return [];
        }

        if (is_string($this->chargeZone_shortName)) {
            return [$this->chargeZone_shortName];
        }

        return $this->chargeZone_shortName;
    }
}
