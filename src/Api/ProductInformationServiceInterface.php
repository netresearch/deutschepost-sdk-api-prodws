<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Api;

use DeutschePost\Sdk\ProdWS\Api\Data\ProductListInterface;

/**
 * @api
 */
interface ProductInformationServiceInterface
{
    /**
     * @return ProductListInterface[]
     */
    public function getProductLists(): array;
}
