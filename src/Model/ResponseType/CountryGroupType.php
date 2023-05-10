<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class CountryGroupType
{
    /**
     * @var string $shortName
     */
    private $shortName;

    /**
     * @var string $user
     */
    private $user;

    /**
     * @var string|null $name
     */
    private $name;

    /**
     * @var string|null $description
     */
    private $description;

    public function getShortName(): string
    {
        return $this->shortName;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }
}
