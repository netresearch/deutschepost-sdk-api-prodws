<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class SalesProductType
{
    /**
     * @var ExtendedIdentifierType $extendedIdentifier
     */
    private $extendedIdentifier;

    /**
     * @var PriceDefinitionType $priceDefinition
     */
    private $priceDefinition;

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
     * @var CountrySpecificPropertyList|null $countrySpecificPropertyList
     */
    private $countrySpecificPropertyList;

    /**
     * @var GroupedPropertyList|null $groupedPropertyList
     */
    private $groupedPropertyList;

    /**
     * @var DestinationAreaType|null $destinationArea
     */
    private $destinationArea;

    /**
     * @var UsageList|null $usageList
     */
    private $usageList;

    /**
     * @var CategoryList|null $categoryList
     */
    private $categoryList;

    /**
     * @var StampTypeList|null $stampTypeList
     */
    private $stampTypeList;

    /**
     * @var DocumentReferenceList|null $documentReferenceList
     */
    private $documentReferenceList;

    /**
     * @var ReferenceTextList|null $referenceTextList
     */
    private $referenceTextList;

    /**
     * @var AccountProductReferenceList $accountProductReferenceList
     */
    private $accountProductReferenceList;

    /**
     * @var AccountServiceReferenceList|null $accountServiceReferenceList
     */
    private $accountServiceReferenceList;

    public function getExtendedIdentifier(): ExtendedIdentifierType
    {
        return $this->extendedIdentifier;
    }

    public function getPriceDefinition(): PriceDefinitionType
    {
        return $this->priceDefinition;
    }

    public function getDimensionList(): DimensionList
    {
        return $this->dimensionList;
    }

    public function getWeight(): ?NumericValueType
    {
        return $this->weight;
    }

    public function getPropertyList(): PropertyList
    {
        return $this->propertyList;
    }

    public function getCountrySpecificPropertyList(): CountrySpecificPropertyList
    {
        return $this->countrySpecificPropertyList;
    }

    public function getGroupedPropertyList(): GroupedPropertyList
    {
        return $this->groupedPropertyList;
    }

    public function getDestinationArea(): DestinationAreaType
    {
        return $this->destinationArea;
    }

    public function getUsageList(): UsageList
    {
        return $this->usageList;
    }

    public function getCategoryList(): CategoryList
    {
        return $this->categoryList;
    }

    public function getStampTypeList(): StampTypeList
    {
        return $this->stampTypeList;
    }

    public function getDocumentReferenceList(): DocumentReferenceList
    {
        return $this->documentReferenceList;
    }

    public function getReferenceTextList(): ReferenceTextList
    {
        return $this->referenceTextList;
    }

    public function getAccountProductReferenceList(): AccountProductReferenceList
    {
        return $this->accountProductReferenceList;
    }

    public function getAccountServiceReferenceList(): AccountServiceReferenceList
    {
        return $this->accountServiceReferenceList;
    }
}
