<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ServiceDayList
{
    /**
     * @var string|string[] $serviceDay
     */
    private $serviceDay;

    /**
     * @return string[]
     */
    public function getServiceDays(): array
    {
        if (empty($this->serviceDay)) {
            return [];
        }

        if (is_string($this->serviceDay)) {
            return [$this->serviceDay];
        }

        return $this->serviceDay;
    }
}
