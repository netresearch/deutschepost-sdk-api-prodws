<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Api\Data;

/**
 * Dimension (mm) or weight (g) range.
 *
 * @api
 */
interface ValueRangeInterface
{
    public function getUnit(): string;

    public function getMin(): int;

    public function getMax(): int;
}
