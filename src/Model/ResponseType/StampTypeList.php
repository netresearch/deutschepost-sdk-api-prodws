<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class StampTypeList
{
    /**
     * @var GroupedPropertyType|GroupedPropertyType[] $stampType
     */
    private $stampType;

    /**
     * @return GroupedPropertyType[]
     */
    public function getStampTypes(): array
    {
        if (empty($this->stampType)) {
            return [];
        }

        if ($this->stampType instanceof GroupedPropertyType) {
            return [$this->stampType];
        }

        return $this->stampType;
    }
}
