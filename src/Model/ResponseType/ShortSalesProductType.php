<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ShortSalesProductType
{
    /**
     * @var string $ProdWSID
     */
    private $ProdWSID;

    /**
     * @var ExternIdentifierType $externIdentifier
     */
    private $externIdentifier;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string $destination
     */
    private $destination;

    /**
     * @var string $validFrom
     */
    private $validFrom;

    /**
     * @var string|null $validTo
     */
    private $validTo;

    /**
     * @var PriceDefinition $priceDefinition
     */
    private $priceDefinition;

    /**
     * @var NumericValueType|null $length
     */
    private $length;

    /**
     * @var NumericValueType|null $width
     */
    private $width;

    /**
     * @var NumericValueType|null $height
     */
    private $height;

    /**
     * @var NumericValueType|null $diameter
     */
    private $diameter;

    /**
     * @var NumericValueType|null $girth
     */
    private $girth;

    /**
     * @var NumericValueType|null $addedEdgeLength
     */
    private $addedEdgeLength;

    /**
     * @var NumericValueType|null $weight
     */
    private $weight;

    public function getProdWSID(): string
    {
        return $this->ProdWSID;
    }

    public function getExternIdentifier(): ExternIdentifierType
    {
        return $this->externIdentifier;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function getValidFrom(): string
    {
        return $this->validFrom;
    }

    public function getValidTo(): ?string
    {
        return $this->validTo;
    }

    public function getPriceDefinition(): PriceDefinition
    {
        return $this->priceDefinition;
    }

    public function getLength(): ?NumericValueType
    {
        return $this->length;
    }

    public function getWidth(): ?NumericValueType
    {
        return $this->width;
    }

    public function getHeight(): ?NumericValueType
    {
        return $this->height;
    }

    public function getDiameter(): ?NumericValueType
    {
        return $this->diameter;
    }

    public function getGirth(): ?NumericValueType
    {
        return $this->girth;
    }

    public function getAddedEdgeLength(): ?NumericValueType
    {
        return $this->addedEdgeLength;
    }

    public function getWeight(): ?NumericValueType
    {
        return $this->weight;
    }
}
