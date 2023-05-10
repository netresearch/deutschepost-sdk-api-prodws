<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class CountryList
{
    /**
     * @var string|null $operator
     */
    private $operator;

    /**
     * @var string|string[] $country_ISOCode
     */
    private $country_ISOCode;

    public function getOperator(): ?string
    {
        return $this->operator;
    }

    /**
     * @return string[]
     */
    public function getCountryISOCodes(): array
    {
        if (empty($this->country_ISOCode)) {
            return [];
        }

        if (is_string($this->country_ISOCode)) {
            return [$this->country_ISOCode];
        }

        return $this->country_ISOCode;
    }
}
