<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class CountrySpecificPropertyType
{
    /**
     * @var PropertyType $property
     */
    private $property;

    /**
     * @var CountryType|CountryType[] $country
     */
    private $country;

    public function getProperty(): PropertyType
    {
        return $this->property;
    }

    /**
     * @return CountryType[]
     */
    public function getCountries(): array
    {
        if (empty($this->country)) {
            return [];
        }

        if ($this->country instanceof CountryType) {
            return [$this->country];
        }

        return $this->country;
    }
}
