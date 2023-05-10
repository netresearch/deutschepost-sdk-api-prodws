<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class CountryGroupList
{
    /**
     * @var CountryGroupType|CountryGroupType[]
     */
    private $countryGroup;

    /**
     * @return CountryGroupType[]
     */
    public function getCountryGroups(): array
    {
        if (empty($this->countryGroup)) {
            return [];
        }

        if ($this->countryGroup instanceof CountryGroupType) {
            return [$this->countryGroup];
        }

        return $this->countryGroup;
    }
}
