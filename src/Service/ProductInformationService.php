<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Service;

use DeutschePost\Sdk\ProdWS\Api\ProductInformationServiceInterface;
use DeutschePost\Sdk\ProdWS\Exception\ServiceExceptionFactory;
use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListRequest;
use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListResponseMapper;
use DeutschePost\Sdk\ProdWS\Soap\AbstractClient;

class ProductInformationService implements ProductInformationServiceInterface
{
    public function __construct(private AbstractClient $client, private GetProductVersionsListResponseMapper $responseMapper)
    {
    }

    public function getProductLists(string $mandantId): array
    {
        $request = new GetProductVersionsListRequest($mandantId, true, 0);

        try {
            $response = $this->client->getProductVersionsList($request);
            return $this->responseMapper->map($response->getResponse());
        } catch (\Throwable $exception) {
            // Catch all leftovers, e.g. \SoapFault, \Exception, ...
            throw ServiceExceptionFactory::createServiceException($exception);
        }
    }
}
