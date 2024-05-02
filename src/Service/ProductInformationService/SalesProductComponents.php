<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Service\ProductInformationService;

use DeutschePost\Sdk\ProdWS\Api\Data\BasicProductInterface;
use DeutschePost\Sdk\ProdWS\Api\Data\ProductAdditionInterface;
use DeutschePost\Sdk\ProdWS\Api\Data\SalesProductComponentsInterface;

class SalesProductComponents implements SalesProductComponentsInterface
{
    /**
     * @param ProductAdditionInterface[] $productAdditions
     */
    public function __construct(private BasicProductInterface $basicProduct, private array $productAdditions = [])
    {
    }

    public function getBasicProduct(): BasicProductInterface
    {
        return $this->basicProduct;
    }

    public function getProductAdditions(): array
    {
        return $this->productAdditions;
    }
}
