<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ValidityType
{
    /**
     * @var TimestampType $validFrom
     */
    private $validFrom;

    /**
     * @var TimestampType|null $validTo
     */
    private $validTo;

    public function getValidFrom(): TimestampType
    {
        return $this->validFrom;
    }

    public function getValidTo(): ?TimestampType
    {
        return $this->validTo;
    }
}
