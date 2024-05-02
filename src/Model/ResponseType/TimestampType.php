<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class TimestampType
{
    /**
     * @var string $date
     */
    private $date;

    /**
     * @var string|null $time
     */
    private $time;

    public function getDate(): string
    {
        return $this->date;
    }

    public function getTime(): ?string
    {
        return $this->time;
    }
}
