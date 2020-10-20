<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class SlidingPriceListType
{
    /**
     * @var string|null $name
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
     * @var SlidingPriceType|SlidingPriceType[] $slidingPrice
     */
    private $slidingPrice;

    public function getName(): ?string
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

    /**
     * @return SlidingPriceType[]
     */
    public function getSlidingPrice(): array
    {
        if (empty($this->slidingPrice)) {
            return [];
        }

        if ($this->slidingPrice instanceof SlidingPriceType) {
            return [$this->slidingPrice];
        }

        return $this->slidingPrice;
    }
}
