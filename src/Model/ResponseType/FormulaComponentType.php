<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class FormulaComponentType
{
    /**
     * @var int $prodwsID
     */
    private $prodwsID;

    /**
     * @var int $version
     */
    private $version;

    /**
     * @var string $component
     */
    private $component;

    /**
     * @return int
     */
    public function getProdwsID(): int
    {
        return $this->prodwsID;
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
    public function getComponent(): string
    {
        return $this->component;
    }
}
