<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Api\Data;

/**
 * @api
 */
interface SalesProductComponentsInterface
{
    /**
     * Obtain the sales product's basic product.
     */
    public function getBasicProduct(): BasicProductInterface;

    /**
     * Obtain the sales product's additional services or options.
     *
     * @return ProductAdditionInterface[]
     */
    public function getProductAdditions(): array;
}
