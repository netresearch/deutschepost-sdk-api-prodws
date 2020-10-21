<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ExtendedIdentifierType
{
    /**
     * @var ExternIdentifierType|ExternIdentifierType[] $externIdentifier
     */
    private $externIdentifier;

    /**
     * @var string $ProdWSID
     */
    private $ProdWSID;

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

    /**
     * @var string|null $branche
     */
    private $branche;

    /**
     * @var string $destination
     */
    private $destination;

    /**
     * @var string|null $transport
     */
    private $transport;

    /**
     * @var string|null $type
     */
    private $type;

    /**
     * @var string|null $state
     */
    private $state;

    /**
     * @var int $version
     */
    private $version;

    /**
     * @var string $validFrom
     */
    private $validFrom;

    /**
     * @var string|null $validTo
     */
    private $validTo;

    /**
     * @var string|null $release
     */
    private $release;

    /**
     * @return ExternIdentifierType[]
     */
    public function getExternalIdentifiers(): array
    {
        if (empty($this->externIdentifier)) {
            return [];
        }

        if ($this->externIdentifier instanceof ExternIdentifierType) {
            return [$this->externIdentifier];
        }

        return $this->externIdentifier;
    }

    /**
     * @return string
     */
    public function getProdWSID(): string
    {
        return $this->ProdWSID ?? $this->{'ProdWS-ID'};
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getShortName(): ?string
    {
        return $this->shortName;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getAnnotation(): ?string
    {
        return $this->annotation;
    }

    /**
     * @return string|null
     */
    public function getBranche(): ?string
    {
        return $this->branche;
    }

    /**
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * @return string|null
     */
    public function getTransport(): ?string
    {
        return $this->transport;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @return int
     */
    public function getVersion(): int
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getValidFrom(): string
    {
        return $this->validFrom;
    }

    /**
     * @return string|null
     */
    public function getValidTo(): ?string
    {
        return $this->validTo;
    }

    /**
     * @return string|null
     */
    public function getRelease(): ?string
    {
        return $this->release;
    }
}
