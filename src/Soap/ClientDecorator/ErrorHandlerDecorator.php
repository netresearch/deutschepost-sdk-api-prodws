<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Soap\ClientDecorator;

use DeutschePost\Sdk\ProdWS\Exception\DetailedErrorException;
use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListRequest;
use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListResponse;
use DeutschePost\Sdk\ProdWS\Model\ResponseType\ExceptionDetailType;
use DeutschePost\Sdk\ProdWS\Soap\AbstractDecorator;

class ErrorHandlerDecorator extends AbstractDecorator
{
    public function getProductVersionsList(GetProductVersionsListRequest $requestType): GetProductVersionsListResponse
    {
        $response = parent::getProductVersionsList($requestType);

        if (!$response->isSuccess()) {
            $message = 'Product list could not be retrieved from ProdWS.';

            if ($response->getExceptionList() !== null) {
                // create exception message from exception list
                $messages = array_map(
                    function (ExceptionDetailType $detail) {
                        return sprintf(
                            '[%s] %s: %s',
                            $detail->getErrorNumber(),
                            $detail->getErrorMessage(),
                            $detail->getErrorDetail()
                        );
                    },
                    $response->getExceptionList()->getExceptions()
                );
                $message = implode("\n", $messages);
            }

            throw new DetailedErrorException($message);
        }

        return $response;
    }
}
