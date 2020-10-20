<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Serializer;

use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListResponse;
use DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ClassMap
{
    /**
     * Map WSDL types to PHP classes.
     *
     * @return string[]
     */
    public static function get(): array
    {
        return [
            'getProductVersionsListResponse' => GetProductVersionsListResponse::class,
            'getProductVersionsListResponseType' => ResponseType\GetProductVersionsListResponseType::class,
            'salesProductList' => ResponseType\SalesProductList::class,
            'salesProductType' => ResponseType\SalesProductType::class,
            'extendedIdentifierType' => ResponseType\ExtendedIdentifierType::class,
            'externIdentifierType' => ResponseType\ExternIdentifierType::class,
            'priceDefinitionType' => ResponseType\PriceDefinitionType::class,
            'priceType' => ResponseType\PriceType::class,
            'currencyAmountType' => ResponseType\CurrencyAmountType::class,
            'validityType' => ResponseType\ValidityType::class,
            'timestampType' => ResponseType\TimestampType::class,
            'tempPriceList' => ResponseType\TempPriceList::class,
            'tempPriceType' => ResponseType\TempPriceType::class,
            'priceFormulaType' => ResponseType\PriceFormulaType::class,
            'formulaExpressionType' => ResponseType\FormulaExpressionType::class,
            'formulaComponentType' => ResponseType\FormulaComponentType::class,
            'dimensionList' => ResponseType\DimensionList::class,
            'numericValueType' => ResponseType\NumericValueType::class,
            'propertyList' => ResponseType\PropertyList::class,
            'propertyType' => ResponseType\PropertyType::class,
            'propertyValueType' => ResponseType\PropertyValueType::class,
            'alphanumericValueType' => ResponseType\AlphanumericValueType::class,
            'dateValueType' => ResponseType\DateValueType::class,
            'currencyValueType' => ResponseType\CurrencyValueType::class,
            'unitPriceType' => ResponseType\UnitPriceType::class,
            'countrySpecificPropertyList' => ResponseType\CountrySpecificPropertyList::class,
            'countrySpecificPropertyType' => ResponseType\CountrySpecificPropertyType::class,
            'countryType' => ResponseType\CountryType::class,
            'groupedPropertyList' => ResponseType\GroupedPropertyList::class,
            'groupedPropertyType' => ResponseType\GroupedPropertyType::class,
            'documentReferenceList' => ResponseType\DocumentReferenceList::class,
            'documentReferenceType' => ResponseType\DocumentReferenceType::class,
            'formatedTextList' => ResponseType\FormatedTextList::class,
            'formatedTextType' => ResponseType\FormatedTextType::class,
            'textRowType' => ResponseType\TextRowType::class,
            'textBlockType' => ResponseType\TextBlockType::class,
            'destinationAreaType' => ResponseType\DestinationAreaType::class,
            'nationalDestinationAreaType' => ResponseType\NationalDestinationAreaType::class,
            'nationalZipCodeListType' => ResponseType\NationalZipCodeListType::class,
            'nationalZipCodeGroupType' => ResponseType\NationalZipCodeGroupType::class,
            'nationalZipCodeArea' => ResponseType\NationalZipCodeArea::class,
            'internationalDestinationAreaType' => ResponseType\InternationalDestinationAreaType::class,
            'countryList' => ResponseType\CountryList::class,
            'countryNegativList' => ResponseType\CountryNegativList::class,
            'countryGroupList' => ResponseType\CountryGroupList::class,
            'chargeZoneList' => ResponseType\ChargeZoneList::class,
            'usageList' => ResponseType\UsageList::class,
            'categoryList' => ResponseType\CategoryList::class,
            'stampTypeList' => ResponseType\StampTypeList::class,
            'referenceTextList' => ResponseType\ReferenceTextList::class,
            'accountProductReferenceList' => ResponseType\AccountProductReferenceList::class,
            'accountProdReferenceType' => ResponseType\AccountProdReferenceType::class,
            'accountServiceReferenceList' => ResponseType\AccountServiceReferenceList::class,
            'basicProductList' => ResponseType\BasicProductList::class,
            'basicProductType' => ResponseType\BasicProductType::class,
            'slidingPriceListType' => ResponseType\SlidingPriceListType::class,
            'slidingPriceType' => ResponseType\SlidingPriceType::class,
            'additionalProductList' => ResponseType\AdditionalProductList::class,
            'additionalProductType' => ResponseType\AdditionalProductType::class,
            'specialServiceList' => ResponseType\SpecialServiceList::class,
            'specialServiceType' => ResponseType\SpecialServiceType::class,
            'serviceDayList' => ResponseType\ServiceDayList::class,
            'exclusionDayList' => ResponseType\ExclusionDayList::class,
            'specialDayType' => ResponseType\SpecialDayType::class,
            'region' => ResponseType\Region::class,
            'shortSalesProductList' => ResponseType\ShortSalesProductList::class,
            'shortSalesProductType' => ResponseType\ShortSalesProductType::class,
            'priceDefinition' => ResponseType\PriceDefinition::class,
            'Exception' => ResponseType\ExceptionList::class,
            'ExceptionDetailType' => ResponseType\ExceptionDetailType::class,
        ];
    }
}
