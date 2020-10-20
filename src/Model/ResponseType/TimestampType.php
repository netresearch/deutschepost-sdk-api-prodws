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

    /**
     * @return string
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @return string|null
     */
    public function getTime(): ?string
    {
        return $this->time;
    }
}
