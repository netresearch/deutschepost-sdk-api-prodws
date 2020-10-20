<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class CountrySpecificPropertyList
{
    /**
     * @var CountrySpecificPropertyType|CountrySpecificPropertyType[] $countrySpecificProperty
     */
    private $countrySpecificProperty;

    /**
     * @return CountrySpecificPropertyType[]
     */
    public function getCountrySpecificProperties(): array
    {
        if (empty($this->countrySpecificProperty)) {
            return [];
        }

        if ($this->countrySpecificProperty instanceof CountrySpecificPropertyType) {
            return [$this->countrySpecificProperty];
        }

        return $this->countrySpecificProperty;
    }
}
