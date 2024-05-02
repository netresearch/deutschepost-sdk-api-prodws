<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Api;

use DeutschePost\Sdk\ProdWS\Api\Data\SalesProductListInterface;
use DeutschePost\Sdk\ProdWS\Exception\ServiceException;

/**
 * @api
 */
interface ProductInformationServiceInterface
{
    /**
     * @return SalesProductListInterface[]
     * @throws ServiceException
     */
    public function getProductLists(string $mandantId): array;
}
