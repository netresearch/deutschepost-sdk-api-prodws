<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

#[\AllowDynamicProperties]
class ExtendedIdentifierType
{
    /**
     * @var ExternIdentifierType|ExternIdentifierType[] $externIdentifier
     */
    private $externIdentifier;

    /**
     * @var string|null $ProdWSID
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

    public function getProdWSID(): string
    {
        return $this->ProdWSID ?? $this->{'ProdWS-ID'};
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

    public function getBranche(): ?string
    {
        return $this->branche;
    }

    public function getDestination(): string
    {
        return $this->destination;
    }

    public function getTransport(): ?string
    {
        return $this->transport;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function getValidFrom(): string
    {
        return $this->validFrom;
    }

    public function getValidTo(): ?string
    {
        return $this->validTo;
    }

    public function getRelease(): ?string
    {
        return $this->release;
    }
}
