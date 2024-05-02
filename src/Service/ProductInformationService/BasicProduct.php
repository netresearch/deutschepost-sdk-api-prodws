<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Service\ProductInformationService;

use DeutschePost\Sdk\ProdWS\Api\Data\BasicProductInterface;
use DeutschePost\Sdk\ProdWS\Api\Data\ValueInterface;
use DeutschePost\Sdk\ProdWS\Api\Data\ValueRangeInterface;

class BasicProduct implements BasicProductInterface
{
    public function __construct(private string $id, private string $name, private int $version, private string $destination, private ValueInterface $price, private ValueRangeInterface $length, private ValueRangeInterface $width, private ValueRangeInterface $height, private ?ValueRangeInterface $weight, private \DateTime $validFrom, private ?\DateTime $validTo)
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

    public function getLength(): ValueRangeInterface
    {
        return $this->length;
    }

    public function getWidth(): ValueRangeInterface
    {
        return $this->width;
    }

    public function getHeight(): ValueRangeInterface
    {
        return $this->height;
    }

    public function getWeight(): ?ValueRangeInterface
    {
        return $this->weight;
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
