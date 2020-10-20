<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class AlphanumericValueType
{
    /**
     * @var string|null $firstValue
     */
    private $firstValue;

    /**
     * @var string|null $lastValue
     */
    private $lastValue;

    /**
     * @var string|null $fixValue
     */
    private $fixValue;

    public function getFirstValue(): ?string
    {
        return $this->firstValue;
    }

    public function getLastValue(): ?string
    {
        return $this->lastValue;
    }

    public function getFixValue(): ?string
    {
        return $this->fixValue;
    }
}
