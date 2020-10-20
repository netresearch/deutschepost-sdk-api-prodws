<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class DocumentReferenceType
{
    /**
     * @var string $type
     */
    private $type;

    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string|null $reference
     */
    private $reference;

    /**
     * @var string|null $description
     */
    private $description;

    /**
     * @var string|null $format
     */
    private $format;

    /**
     * @var string|null $materialNumber
     */
    private $materialNumber;

    /**
     * @var string|null $publishing
     */
    private $publishing;

    public function getType(): string
    {
        return $this->type;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function getMaterialNumber(): ?string
    {
        return $this->materialNumber;
    }

    public function getPublishing(): ?string
    {
        return $this->publishing;
    }
}
