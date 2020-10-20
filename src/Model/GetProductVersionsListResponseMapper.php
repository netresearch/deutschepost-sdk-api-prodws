<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model;

use DeutschePost\Sdk\ProdWS\Api\Data\SalesProductListInterface;
use DeutschePost\Sdk\ProdWS\Service\ProductInformationService\SalesProductList;

class GetProductVersionsListResponseMapper
{
    /**
     * @param GetProductVersionsListResponse $response
     * @return SalesProductListInterface[]
     */
    public function map(GetProductVersionsListResponse $response): array
    {
        $currentList = new SalesProductList(47, new \DateTime('2020-07-01T00:00:00+02:00'), null, []);
        return [$currentList];
    }
}
