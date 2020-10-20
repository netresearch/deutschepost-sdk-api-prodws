<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class PropertyList
{
    /**
     * @var PropertyType|PropertyType[] $property
     */
    private $property;

    /**
     * @return PropertyType[]
     */
    public function getProperties(): array
    {
        if (empty($this->property)) {
            return [];
        }

        if ($this->property instanceof PropertyType) {
            return [$this->property];
        }

        return $this->property;
    }
}
