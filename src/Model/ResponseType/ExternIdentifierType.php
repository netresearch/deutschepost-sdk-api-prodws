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

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
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
     * @return int|null
     */
    public function getFirstPPLVersion(): ?int
    {
        return $this->firstPPLVersion;
    }

    /**
     * @return int|null
     */
    public function getLastPPLVersion(): ?int
    {
        return $this->lastPPLVersion;
    }

    /**
     * @return int|null
     */
    public function getActualPPLVersion(): ?int
    {
        return $this->actualPPLVersion;
    }

    /**
     * @return string|null
     */
    public function getSapProductType(): ?string
    {
        return $this->sapProductType;
    }
}
