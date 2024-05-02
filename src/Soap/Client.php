<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Soap;

use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListRequest;
use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListResponse;

class Client extends AbstractClient
{
    public function __construct(private \SoapClient $soapClient)
    {
    }

    public function getProductVersionsList(GetProductVersionsListRequest $requestType): GetProductVersionsListResponse
    {
        return $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
    }
}
