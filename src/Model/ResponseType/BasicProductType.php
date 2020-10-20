<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class BasicProductType
{
    /**
     * @var ExtendedIdentifierType $extendedIdentifier
     */
    private $extendedIdentifier;

    /**
     * @var UnitPriceType $priceDefinition
     */
    private $priceDefinition;

    /**
     * @var SlidingPriceListType|null $slidingPriceList
     */
    private $slidingPriceList;

    /**
     * @var DimensionList|null $dimensionList
     */
    private $dimensionList;

    /**
     * @var NumericValueType|null $weight
     */
    private $weight;

    /**
     * @var PropertyList|null $propertyList
     */
    private $propertyList;

    /**
     * @var GroupedPropertyList|null $groupedPropertyList
     */
    private $groupedPropertyList;

    /**
     * @var DestinationAreaType|null $destinationArea
     */
    private $destinationArea;

    /**
     * @var DocumentReferenceList|null $documentReferenceList
     */
    private $documentReferenceList;

    public function getExtendedIdentifier(): ExtendedIdentifierType
    {
        return $this->extendedIdentifier;
    }

    public function getPriceDefinition(): UnitPriceType
    {
        return $this->priceDefinition;
    }

    public function getSlidingPriceList(): ?SlidingPriceListType
    {
        return $this->slidingPriceList;
    }

    public function getDimensionList(): ?DimensionList
    {
        return $this->dimensionList;
    }

    public function getWeight(): ?NumericValueType
    {
        return $this->weight;
    }

    public function getPropertyList(): ?PropertyList
    {
        return $this->propertyList;
    }

    public function getGroupedPropertyList(): ?GroupedPropertyList
    {
        return $this->groupedPropertyList;
    }

    public function getDestinationArea(): ?DestinationAreaType
    {
        return $this->destinationArea;
    }

    public function getDocumentReferenceList(): ?DocumentReferenceList
    {
        return $this->documentReferenceList;
    }
}
