<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class NationalZipCodeListType
{
    /**
     * @var string|null $name
     */
    private $name;

    /**
     * @var string|null $description
     */
    private $description;

    /**
     * @var string[] $nationalZipCode
     */
    private $nationalZipCode;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string[]
     */
    public function getNationalZipCodes(): array
    {
        if (empty($this->nationalZipCode)) {
            return [];
        }

        if (is_string($this->nationalZipCode)) {
            return [$this->nationalZipCode];
        }

        return $this->nationalZipCode;
    }
}
