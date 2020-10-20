<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class SpecialDayType
{
    /**
     * @var string $date
     */
    private $date;

    /**
     * @var string|null $name
     */
    private $name;

    /**
     * @var Region|Region[] $region
     */
    private $region;

    public function getDate(): string
    {
        return $this->date;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return Region[]
     */
    public function getRegions(): array
    {
        if (empty($this->region)) {
            return [];
        }

        if ($this->region instanceof Region) {
            return [$this->region];
        }

        return $this->region;
    }
}
