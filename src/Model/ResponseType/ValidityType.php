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

    /**
     * @return TimestampType
     */
    public function getValidFrom(): TimestampType
    {
        return $this->validFrom;
    }

    /**
     * @return TimestampType|null
     */
    public function getValidTo(): ?TimestampType
    {
        return $this->validTo;
    }
}
