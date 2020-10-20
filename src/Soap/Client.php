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
    /**
     * @var \SoapClient
     */
    private $soapClient;

    public function __construct(\SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    public function getProductVersionsList(GetProductVersionsListRequest $requestType): GetProductVersionsListResponse
    {
        return $this->soapClient->__soapCall(__FUNCTION__, [$requestType]);
    }
}
