<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class Region
{
    /**
     * Enum, "bundesweit", "landesweit", "regional".
     *
     * @var string $type
     */
    private $type;

    /**
     * @var string|null $name
     */
    private $name;

    public function getType(): string
    {
        return $this->type;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
