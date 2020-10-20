<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class NationalZipCodeGroupType
{
    /**
     * @var string|null $name
     */
    private $name;

    /**
     * @var string|null $description
     */
    private $description;

    /**
     * @var string|null $routeRegion
     */
    private $routeRegion;

    /**
     * @var string|null $routeZone
     */
    private $routeZone;

    /**
     * @var NationalZipCodeArea|null $nationalZipCodeArea
     */
    private $nationalZipCodeArea;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getRouteRegion(): ?string
    {
        return $this->routeRegion;
    }

    public function getRouteZone(): ?string
    {
        return $this->routeZone;
    }

    public function getNationalZipCodeArea(): ?NationalZipCodeArea
    {
        return $this->nationalZipCodeArea;
    }
}
