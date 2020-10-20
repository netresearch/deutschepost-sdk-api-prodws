<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class CountryGroupList
{
    /**
     * @var string|null $operator
     */
    private $operator;

    /**
     * @var string[] $countryGroup_shortName
     */
    private $countryGroup_shortName;

    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @return string[]
     */
    public function getCountryGroupShortNames(): array
    {
        if (empty($this->countryGroup_shortName)) {
            return [];
        }

        if (is_string($this->countryGroup_shortName)) {
            return [$this->countryGroup_shortName];
        }

        return $this->countryGroup_shortName;
    }
}
