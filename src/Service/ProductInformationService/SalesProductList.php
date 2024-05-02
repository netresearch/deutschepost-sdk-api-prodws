<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Service\ProductInformationService;

use DeutschePost\Sdk\ProdWS\Api\Data\SalesProductInterface;
use DeutschePost\Sdk\ProdWS\Api\Data\SalesProductListInterface;

class SalesProductList implements SalesProductListInterface
{
    /**
     * @param SalesProductInterface[] $products
     */
    public function __construct(private int $id, private \DateTime $validFrom, private ?\DateTime $validTo, private array $products)
    {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getValidFrom(): \DateTime
    {
        return $this->validFrom;
    }

    public function getValidTo(): ?\DateTime
    {
        return $this->validTo;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
