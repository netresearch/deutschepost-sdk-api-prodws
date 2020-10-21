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
     * @var BasicProductInterface
     */
    private $basicProduct;

    /**
     * @var ProductAdditionInterface[]
     */
    private $productAdditions;

    /**
     * @param BasicProductInterface $basicProduct
     * @param ProductAdditionInterface[] $productAdditions
     */
    public function __construct(BasicProductInterface $basicProduct, array $productAdditions = [])
    {
        $this->basicProduct = $basicProduct;
        $this->productAdditions = $productAdditions;
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
