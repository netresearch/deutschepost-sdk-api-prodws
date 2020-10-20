<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class SpecialServiceType
{
    /**
     * @var ExtendedIdentifierType $extendedIdentifier
     */
    private $extendedIdentifier;

    /**
     * @var string|null $condition
     */
    private $condition;

    /**
     * @var UnitPriceType $priceDefinition
     */
    private $priceDefinition;

    /**
     * @var SlidingPriceListType|null $slidingPriceList
     */
    private $slidingPriceList;

    /**
     * @var PropertyList|null $propertyList
     */
    private $propertyList;

    /**
     * @var GroupedPropertyList|null $groupedPropertyList
     */
    private $groupedPropertyList;

    /**
     * @var ServiceDayList|null $serviceDayList
     */
    private $serviceDayList;

    /**
     * @var ExclusionDayList|null $exclusionDayList
     */
    private $exclusionDayList;

    public function getExtendedIdentifier(): ExtendedIdentifierType
    {
        return $this->extendedIdentifier;
    }

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function getPriceDefinition(): UnitPriceType
    {
        return $this->priceDefinition;
    }

    public function getSlidingPriceList(): ?SlidingPriceListType
    {
        return $this->slidingPriceList;
    }

    public function getPropertyList(): ?PropertyList
    {
        return $this->propertyList;
    }

    public function getGroupedPropertyList(): ?GroupedPropertyList
    {
        return $this->groupedPropertyList;
    }

    public function getServiceDayList(): ?ServiceDayList
    {
        return $this->serviceDayList;
    }

    public function getExclusionDayList(): ?ExclusionDayList
    {
        return $this->exclusionDayList;
    }
}
