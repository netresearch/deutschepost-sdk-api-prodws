<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Soap;

use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListRequest;
use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListResponse;

/**
 * AbstractDecorator
 *
 * Wrapper around actual soap client to perform the following tasks:
 * - add authentication
 * - transform errors into exceptions
 * - log communication
 */
abstract class AbstractDecorator extends AbstractClient
{
    public function __construct(private AbstractClient $client)
    {
    }

    public function getProductVersionsList(GetProductVersionsListRequest $requestType): GetProductVersionsListResponse
    {
        return $this->client->getProductVersionsList($requestType);
    }
}
