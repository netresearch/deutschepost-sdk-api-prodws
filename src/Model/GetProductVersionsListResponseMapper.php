<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model;

use DeutschePost\Sdk\ProdWS\Api\Data\SalesProductListInterface;
use DeutschePost\Sdk\ProdWS\Model\ResponseType\AccountProdReferenceType;
use DeutschePost\Sdk\ProdWS\Model\ResponseType\AdditionalProductType;
use DeutschePost\Sdk\ProdWS\Model\ResponseType\BasicProductList;
use DeutschePost\Sdk\ProdWS\Model\ResponseType\BasicProductType;
use DeutschePost\Sdk\ProdWS\Model\ResponseType\ExtendedIdentifierType;
use DeutschePost\Sdk\ProdWS\Model\ResponseType\GetProductVersionsListResponseType;
use DeutschePost\Sdk\ProdWS\Service\ProductInformationService\BasicProduct;
use DeutschePost\Sdk\ProdWS\Service\ProductInformationService\ProductAddition;
use DeutschePost\Sdk\ProdWS\Service\ProductInformationService\SalesProduct;
use DeutschePost\Sdk\ProdWS\Service\ProductInformationService\SalesProductComponents;
use DeutschePost\Sdk\ProdWS\Service\ProductInformationService\SalesProductList;
use DeutschePost\Sdk\ProdWS\Service\ProductInformationService\Value;
use DeutschePost\Sdk\ProdWS\Service\ProductInformationService\ValueRange;

class GetProductVersionsListResponseMapper
{
    /**
     * Obtain the oldest PPL version the product is contained in.
     *
     * @param ExtendedIdentifierType $identifiersList
     * @return int
     */
    private function getFirstPPLVersion(ExtendedIdentifierType $identifiersList): int
    {
        foreach ($identifiersList->getExternalIdentifiers() as $externalIdentifier) {
            if ($externalIdentifier->getSource() === 'PPL') {
                return $externalIdentifier->getFirstPPLVersion();
            }
        }

        return 0;
    }

    /**
     * Obtain the most recent PPL version the product is contained in.
     *
     * @param ExtendedIdentifierType $identifiersList
     * @return int
     */
    private function getLastPPLVersion(ExtendedIdentifierType $identifiersList): int
    {
        foreach ($identifiersList->getExternalIdentifiers() as $externalIdentifier) {
            if ($externalIdentifier->getSource() === 'PPL') {
                return $externalIdentifier->getLastPPLVersion();
            }
        }

        return 0;
    }

    /**
     * Obtain the product's identifier in the PPL system.
     *
     * @param ExtendedIdentifierType $identifiersList
     * @return string
     */
    private function getPPLId(ExtendedIdentifierType $identifiersList): string
    {
        foreach ($identifiersList->getExternalIdentifiers() as $externalIdentifier) {
            if ($externalIdentifier->getSource() === 'PPL') {
                return $externalIdentifier->getId();
            }
        }

        return '';
    }

    /**
     * @param ?GetProductVersionsListResponseType $response
     * @return SalesProductListInterface[]
     * @throws \Exception
     */
    public function map(?GetProductVersionsListResponseType $response): array
    {
        if ($response === null || $response->getSalesProductList() === null) {
            return [];
        }

        $salesProducts = [];

        $basicProducts = $this->extractBasicProducts(
            $response->getBasicProductList()
        );

        $productAdditions = $this->extractProductAdditions(
            $response->getAdditionalProductList()
        );

        $productListDates = [];
        foreach ($response->getSalesProductList()->getSalesProducts() as $salesProduct) {
            $extId = $salesProduct->getExtendedIdentifier();
            $firstPplVersion = $this->getFirstPPLVersion($extId);
            $lastPplVersion = $this->getLastPPLVersion($extId);
            $pplId = $this->getPPLId($extId);

            $price = $salesProduct->getPriceDefinition()->getPrice()->getCommercialGrossPrice();
            $length = $salesProduct->getDimensionList()->getLength();
            $width = $salesProduct->getDimensionList()->getWidth();
            $height = $salesProduct->getDimensionList()->getHeight();
            $weight = $salesProduct->getWeight();

            $refKeys = array_map(
                static function (AccountProdReferenceType $ref) {
                    return sprintf("%s-%d", $ref->getProdWSID(), $ref->getVersion());
                },
                $salesProduct->getAccountProductReferenceList()->getAccountProductReferences()
            );

            for ($pplVersion = $firstPplVersion; $pplVersion <= $lastPplVersion; $pplVersion++) {
                $basicComponents = array_intersect_key($basicProducts, array_flip($refKeys));
                $additionalComponents = array_intersect_key($productAdditions, array_flip($refKeys));

                $salesProducts[$pplVersion][] = new SalesProduct(
                    $extId->getProdWSID(),
                    $extId->getName(),
                    $extId->getVersion(),
                    $pplId,
                    $extId->getDestination(),
                    new Value($price->getCurrency(), $price->getValue()),
                    new ValueRange($length->getUnit(), $length->getMinValue(), $length->getMaxValue()),
                    new ValueRange($width->getUnit(), $width->getMinValue(), $width->getMaxValue()),
                    new ValueRange($height->getUnit(), $height->getMinValue(), $height->getMaxValue()),
                    $weight ? new ValueRange($weight->getUnit(), $weight->getMinValue(), $weight->getMaxValue()) : null,
                    new SalesProductComponents(array_shift($basicComponents), $additionalComponents)
                );
            }

            // infer product list date range from sales product
            if ($extId->getValidFrom() > ($productListDates[$lastPplVersion]['valid_from'] ?? 0)) {
                $productListDates[$lastPplVersion] = [
                    'valid_from' => $extId->getValidFrom(),
                    'valid_to' => $extId->getValidTo(),
                ];
            }
        }

        // drop sales products that are neither assigned to the latest nor the previous list
        $salesProducts = array_intersect_key($salesProducts, $productListDates);

        $productLists = [];
        foreach ($salesProducts as $pplVersion => $pplSalesProducts) {
            $from = new \DateTime($productListDates[$pplVersion]['valid_from']);
            if (!empty($productListDates[$pplVersion]['valid_to'])) {
                $to = new \DateTime($productListDates[$pplVersion]['valid_to']);
            } else {
                $to = null;
            }

            $productLists[] = new SalesProductList($pplVersion, $from, $to, $pplSalesProducts);
        }

        return $productLists;
    }

    /**
     * @param BasicProductList|null $productList
     * @return BasicProduct[]
     * @throws \Exception
     */
    private function extractBasicProducts(?BasicProductList $productList): array
    {
        if ($productList === null) {
            return [];
        }

        return array_reduce(
            $productList->getBasicProducts(),
            static function (array $basicProducts, BasicProductType $basicProduct) {
                $extId = $basicProduct->getExtendedIdentifier();
                $key = sprintf("%s-%d", $extId->getProdWSID(), $extId->getVersion());

                $price = $basicProduct->getPriceDefinition()->getGrossPrice();
                $length = $basicProduct->getDimensionList()->getLength();
                $width = $basicProduct->getDimensionList()->getWidth();
                $height = $basicProduct->getDimensionList()->getHeight();
                $weight = $basicProduct->getWeight();

                $basicProducts[$key] = new BasicProduct(
                    $extId->getProdWSID(),
                    $extId->getName(),
                    $extId->getVersion(),
                    $extId->getDestination(),
                    new Value($price->getCurrency(), $price->getValue()),
                    new ValueRange($length->getUnit(), $length->getMinValue(), $length->getMaxValue()),
                    new ValueRange($width->getUnit(), $width->getMinValue(), $width->getMaxValue()),
                    new ValueRange($height->getUnit(), $height->getMinValue(), $height->getMaxValue()),
                    $weight ? new ValueRange($weight->getUnit(), $weight->getMinValue(), $weight->getMaxValue()) : null,
                    new \DateTime($extId->getValidFrom()),
                    $extId->getValidTo() ? new \DateTime($extId->getValidTo()) : null
                );

                return $basicProducts;
            },
            []
        );
    }

    /**
     * @param ResponseType\AdditionalProductList|null $productAdditionsList
     * @return ProductAddition[]
     * @throws \Exception
     */
    private function extractProductAdditions(?ResponseType\AdditionalProductList $productAdditionsList): array
    {
        if ($productAdditionsList === null) {
            return [];
        }

        return array_reduce(
            $productAdditionsList->getAdditionalProducts(),
            static function (array $productAdditions, AdditionalProductType $additionalProduct) {
                $extId = $additionalProduct->getExtendedIdentifier();
                $key = sprintf("%s-%d", $extId->getProdWSID(), $extId->getVersion());

                $price = $additionalProduct->getPriceDefinition()->getGrossPrice();

                $productAdditions[$key] = new ProductAddition(
                    $extId->getProdWSID(),
                    $extId->getName(),
                    $extId->getVersion(),
                    $extId->getDestination(),
                    new Value($price->getCurrency(), $price->getValue()),
                    new \DateTime($extId->getValidFrom()),
                    $extId->getValidTo() ? new \DateTime($extId->getValidTo()) : null
                );

                return $productAdditions;
            },
            []
        );
    }
}
