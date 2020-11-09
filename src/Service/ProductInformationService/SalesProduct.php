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
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $version;

    /**
     * @var string
     */
    private $pplId;

    /**
     * @var string
     */
    private $destination;

    /**
     * @var ValueInterface
     */
    private $price;

    /**
     * @var ValueRangeInterface
     */
    private $length;

    /**
     * @var ValueRangeInterface
     */
    private $width;

    /**
     * @var ValueRangeInterface
     */
    private $height;

    /**
     * @var ValueRangeInterface|null
     */
    private $weight;

    /**
     * @var SalesProductComponentsInterface
     */
    private $components;

    public function __construct(
        string $id,
        string $name,
        int $version,
        string $pplId,
        string $destination,
        ValueInterface $price,
        ValueRangeInterface $length,
        ValueRangeInterface $width,
        ValueRangeInterface $height,
        ?ValueRangeInterface $weight,
        SalesProductComponentsInterface $components
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->version = $version;
        $this->pplId = $pplId;
        $this->destination = $destination;
        $this->price = $price;
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->weight = $weight;
        $this->components = $components;
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
