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
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $validFrom;

    /**
     * @var \DateTime|null
     */
    private $validTo;

    /**
     * @var SalesProductInterface[]
     */
    private $products;

    /**
     * @param int $id
     * @param \DateTime $validFrom
     * @param \DateTime|null $validTo
     * @param SalesProductInterface[] $products
     */
    public function __construct(int $id, \DateTime $validFrom, ?\DateTime $validTo, array $products)
    {
        $this->id = $id;
        $this->validFrom = $validFrom;
        $this->validTo = $validTo;
        $this->products = $products;
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
