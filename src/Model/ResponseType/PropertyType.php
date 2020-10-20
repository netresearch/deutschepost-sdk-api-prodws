<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class PropertyType
{
    /**
     * @var PropertyValueType $propertyValue
     */
    private $propertyValue;

    /**
     * @var UnitPriceType|null $price
     */
    private $price;

    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string|null $shortName
     */
    private $shortName;

    /**
     * @var string|null $description
     */
    private $description;

    /**
     * @var string|null $annotation
     */
    private $annotation;

    public function getPropertyValue(): PropertyValueType
    {
        return $this->propertyValue;
    }

    public function getPrice(): ?UnitPriceType
    {
        return $this->price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getAnnotation(): ?string
    {
        return $this->annotation;
    }
}
