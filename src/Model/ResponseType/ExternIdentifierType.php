<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ExternIdentifierType
{
    /**
     * @var string $source
     */
    private $source;

    /**
     * @var string $id
     */
    private $id;

    /**
     * @var string|null $name
     */
    private $name;

    /**
     * @var string|null $description
     */
    private $description;

    /**
     * @var string|null $annotation
     */
    private $annotation;

    /**
     * @var int|null $firstPPLVersion
     */
    private $firstPPLVersion;

    /**
     * @var int|null $lastPPLVersion
     */
    private $lastPPLVersion;

    /**
     * @var int|null $actualPPLVersion
     */
    private $actualPPLVersion;

    /**
     * @var string|null $sapProductType
     */
    private $sapProductType;

    public function getSource(): string
    {
        return $this->source;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getAnnotation(): ?string
    {
        return $this->annotation;
    }

    public function getFirstPPLVersion(): ?int
    {
        return $this->firstPPLVersion;
    }

    public function getLastPPLVersion(): ?int
    {
        return $this->lastPPLVersion;
    }

    public function getActualPPLVersion(): ?int
    {
        return $this->actualPPLVersion;
    }

    public function getSapProductType(): ?string
    {
        return $this->sapProductType;
    }
}
