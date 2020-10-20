<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class GroupedPropertyType
{
    /**
     * @var PropertyList|null $propertyList
     */
    private $propertyList;

    /**
     * @var UnitPriceType|null $price
     */
    private $price;

    /**
     * @var DocumentReferenceList|null $documentReferenceList
     */
    private $documentReferenceList;

    /**
     * @var FormatedTextList|null $formatedTextList
     */
    private $formatedTextList;

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

    public function getPropertyList(): ?PropertyList
    {
        return $this->propertyList;
    }

    public function getPrice(): ?UnitPriceType
    {
        return $this->price;
    }

    public function getDocumentReferenceList(): ?DocumentReferenceList
    {
        return $this->documentReferenceList;
    }

    public function getFormattedTextList(): ?FormatedTextList
    {
        return $this->formatedTextList;
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
