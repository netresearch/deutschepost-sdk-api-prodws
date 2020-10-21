<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Api\Data;

/**
 * @api
 */
interface ValueInterface
{
    public function getUnit(): string;

    public function getAmount(): float;
}
