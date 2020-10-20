<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class CategoryList
{
    /**
     * @var GroupedPropertyType|GroupedPropertyType[] $category
     */
    private $category;

    /**
     * @return GroupedPropertyType[]
     */
    public function getCategories(): array
    {
        if (empty($this->category)) {
            return [];
        }

        if ($this->category instanceof GroupedPropertyType) {
            return [$this->category];
        }

        return $this->category;
    }
}
