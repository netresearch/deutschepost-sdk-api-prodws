<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class UsageList
{
    /**
     * @var GroupedPropertyType|GroupedPropertyType[] $usage
     */
    private $usage;

    /**
     * @return GroupedPropertyType[]
     */
    public function getUsages(): array
    {
        if (empty($this->usage)) {
            return [];
        }

        if ($this->usage instanceof GroupedPropertyType) {
            return [$this->usage];
        }

        return $this->usage;
    }
}
