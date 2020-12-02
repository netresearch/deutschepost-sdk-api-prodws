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
    private $destination;

    /**
     * @var ValueInterface
     */
    private $price;

    /**
     * @var \DateTime
     */
    private $validFrom;

    /**
     * @var \DateTime|null
     */
    private $validTo;

    public function __construct(
        string $id,
        string $name,
        int $version,
        string $destination,
        ValueInterface $price,
        \DateTime $validFrom,
        ?\DateTime $validTo
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->version = $version;
        $this->destination = $destination;
        $this->price = $price;
        $this->validFrom = $validFrom;
        $this->validTo = $validTo;
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
