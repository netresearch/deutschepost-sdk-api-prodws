<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Soap;

use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListRequest;
use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListResponse;

abstract class AbstractClient
{
    /**
     * @throws \SoapFault
     * @throws \Exception
     */
    abstract public function getProductVersionsList(
        GetProductVersionsListRequest $requestType
    ): GetProductVersionsListResponse;
}
