<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class NationalZipCodeArea
{
    /**
     * @var string $firstZipCode
     */
    private $firstZipCode;

    /**
     * @var string $lastZipCode
     */
    private $lastZipCode;

    public function getFirstZipCode(): string
    {
        return $this->firstZipCode;
    }

    public function getLastZipCode(): string
    {
        return $this->lastZipCode;
    }
}
