<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ExclusionDayList
{
    /**
     * @var SpecialDayType|SpecialDayType[] $exclusionDay
     */
    private $exclusionDay;

    /**
     * @return SpecialDayType[]
     */
    public function getExclusionDays(): array
    {
        if (empty($this->exclusionDay)) {
            return [];
        }

        if ($this->exclusionDay instanceof SpecialDayType) {
            return [$this->exclusionDay];
        }

        return $this->exclusionDay;
    }
}
