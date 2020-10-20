<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class InternationalDestinationAreaType
{
    /**
     * @var CountryList|null $countryList
     */
    private $countryList;

    /**
     * @var CountryNegativList|null $countryNegativList
     */
    private $countryNegativList;

    /**
     * @var CountryGroupList|null $countryGroupList
     */
    private $countryGroupList;

    /**
     * @var ChargeZoneList|null $chargeZoneList
     */
    private $chargeZoneList;

    public function getCountryList(): ?CountryList
    {
        return $this->countryList;
    }

    public function getCountryNegativList(): ?CountryNegativList
    {
        return $this->countryNegativList;
    }

    public function getCountryGroupList(): ?CountryGroupList
    {
        return $this->countryGroupList;
    }

    public function getChargeZoneList(): ?ChargeZoneList
    {
        return $this->chargeZoneList;
    }
}
