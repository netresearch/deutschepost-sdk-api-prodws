<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class CountryType
{
    /**
     * @var string $name
     */
    private $name;

    /**
     * @var string|null $alternativeName
     */
    private $alternativeName;

    /**
     * @var string|null $insularAreaOf
     */
    private $insularAreaOf;

    /**
     * @var string|null $annotation
     */
    private $annotation;

    /**
     * @var string|null $alpha2ISOCode
     */
    private $alpha2ISOCode;

    /**
     * @var string|null $alpha3ISOCode
     */
    private $alpha3ISOCode;

    /**
     * @var int|null $numISOCode
     */
    private $numISOCode;

    /**
     * @var string|null $pseudoCode
     */
    private $pseudoCode;

    /**
     * @var bool $syntheticKey
     */
    private $syntheticKey;

    /**
     * @var string $validFrom
     */
    private $validFrom;

    /**
     * @var string|null $validTo
     */
    private $validTo;

    public function getName(): string
    {
        return $this->name;
    }

    public function getAlternativeName(): ?string
    {
        return $this->alternativeName;
    }

    public function getInsularAreaOf(): ?string
    {
        return $this->insularAreaOf;
    }

    public function getAnnotation(): ?string
    {
        return $this->annotation;
    }

    public function getAlpha2ISOCode(): ?string
    {
        return $this->alpha2ISOCode;
    }

    public function getAlpha3ISOCode(): ?string
    {
        return $this->alpha3ISOCode;
    }

    public function getNumISOCode(): ?int
    {
        return $this->numISOCode;
    }

    public function getPseudoCode(): ?string
    {
        return $this->pseudoCode;
    }

    public function isSyntheticKey(): bool
    {
        return $this->syntheticKey;
    }

    public function getValidFrom(): string
    {
        return $this->validFrom;
    }

    public function getValidTo(): ?string
    {
        return $this->validTo;
    }
}
