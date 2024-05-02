<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Service\ProductInformationService;

use DeutschePost\Sdk\ProdWS\Api\Data\ProductAdditionInterface;
use DeutschePost\Sdk\ProdWS\Api\Data\ValueInterface;

class ProductAddition implements ProductAdditionInterface
{
    public function __construct(private string $id, private string $name, private int $version, private string $destination, private ValueInterface $price, private \DateTime $validFrom, private ?\DateTime $validTo)
    {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function getPrice(): ValueInterface
    {
        return $this->price;
    }

    public function getValidFrom(): \DateTime
    {
        return $this->validFrom;
    }

    public function getValidTo(): ?\DateTime
    {
        return $this->validTo;
    }
}
