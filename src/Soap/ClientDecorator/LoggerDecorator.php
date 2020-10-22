<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Soap\ClientDecorator;

use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListRequest;
use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListResponse;
use DeutschePost\Sdk\ProdWS\Soap\AbstractClient;
use DeutschePost\Sdk\ProdWS\Soap\AbstractDecorator;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

class LoggerDecorator extends AbstractDecorator
{
    /**
     * @var \SoapClient
     */
    private $soapClient;

    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(AbstractClient $client, \SoapClient $soapClient, LoggerInterface $logger)
    {
        $this->soapClient = $soapClient;
        $this->logger = $logger;

        parent::__construct($client);
    }

    public function getProductVersionsList(GetProductVersionsListRequest $requestType): GetProductVersionsListResponse
    {
        $logLevel = LogLevel::INFO;

        try {
            $response = parent::getProductVersionsList($requestType);
        } catch (\Exception $exception) {
            $logLevel = LogLevel::ERROR;

            throw $exception;
        } finally {
            $lastRequest = sprintf(
                "%s\n%s",
                $this->soapClient->__getLastRequestHeaders(),
                $this->soapClient->__getLastRequest()
            );

            $lastResponse = sprintf(
                "%s\n%s",
                $this->soapClient->__getLastResponseHeaders(),
                $this->soapClient->__getLastResponse()
            );

            $this->logger->log($logLevel, $lastRequest);
            $this->logger->log($logLevel, $lastResponse);

            if (isset($exception)) {
                $this->logger->log($logLevel, $exception->getMessage());
            }
        }

        return $response;
    }
}
