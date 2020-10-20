<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class GroupedPropertyList
{
    /**
     * @var GroupedPropertyType|GroupedPropertyType[] $groupedProperty
     */
    public $groupedProperty;

    /**
     * @return GroupedPropertyType[]
     */
    public function getGroupedProperties(): array
    {
        if (empty($this->groupedProperty)) {
            return [];
        }

        if ($this->groupedProperty instanceof GroupedPropertyType) {
            return [$this->groupedProperty];
        }

        return $this->groupedProperty;
    }
}
