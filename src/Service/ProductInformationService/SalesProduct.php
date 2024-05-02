<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Service\ProductInformationService;

use DeutschePost\Sdk\ProdWS\Api\Data\SalesProductComponentsInterface;
use DeutschePost\Sdk\ProdWS\Api\Data\SalesProductInterface;
use DeutschePost\Sdk\ProdWS\Api\Data\ValueInterface;
use DeutschePost\Sdk\ProdWS\Api\Data\ValueRangeInterface;

class SalesProduct implements SalesProductInterface
{
    public function __construct(private string $id, private string $name, private int $version, private string $pplId, private string $destination, private ValueInterface $price, private ValueRangeInterface $length, private ValueRangeInterface $width, private ValueRangeInterface $height, private ?ValueRangeInterface $weight, private SalesProductComponentsInterface $components)
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

    public function getPPLId(): string
    {
        return $this->pplId;
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

    public function getComponents(): SalesProductComponentsInterface
    {
        return $this->components;
    }
}
