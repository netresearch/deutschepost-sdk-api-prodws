<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class DateValueType
{
    /**
     * @var string|null $firstDate
     */
    private $firstDate;

    /**
     * @var string|null $lastDate
     */
    private $lastDate;

    /**
     * @var string|null $fixDate
     */
    private $fixDate;

    public function getFirstDate(): ?string
    {
        return $this->firstDate;
    }

    public function getLastDate(): ?string
    {
        return $this->lastDate;
    }

    public function getFixDate(): ?string
    {
        return $this->fixDate;
    }
}
