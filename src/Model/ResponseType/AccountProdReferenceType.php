<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class AccountProdReferenceType
{
    /**
     * @var CountryNegativList|null $countryNegativList
     */
    private $countryNegativList;

    /**
     * @var string $ProdWSID
     */
    private $ProdWSID;

    /**
     * @var int $version
     */
    private $version;

    public function getCountryNegativList(): ?CountryNegativList
    {
        return $this->countryNegativList;
    }

    public function getProdWSID(): string
    {
        return $this->ProdWSID;
    }

    public function getVersion(): int
    {
        return $this->version;
    }
}
