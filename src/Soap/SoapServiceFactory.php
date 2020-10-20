<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Soap;

use DeutschePost\Sdk\ProdWS\Api\ProductInformationServiceInterface;
use DeutschePost\Sdk\ProdWS\Api\ServiceFactoryInterface;
use DeutschePost\Sdk\ProdWS\Model\GetProductVersionsListResponseMapper;
use DeutschePost\Sdk\ProdWS\Service\ProductInformationService;
use DeutschePost\Sdk\ProdWS\Soap\ClientDecorator\AuthenticationDecorator;
use DeutschePost\Sdk\ProdWS\Soap\ClientDecorator\LoggerDecorator;
use Psr\Log\LoggerInterface;

class SoapServiceFactory implements ServiceFactoryInterface
{
    /**
     * @var \SoapClient
     */
    private $soapClient;

    public function __construct(\SoapClient $soapClient)
    {
        $this->soapClient = $soapClient;
    }

    public function createProductInformationService(
        string $username,
        string $password,
        LoggerInterface $logger
    ): ProductInformationServiceInterface {
        $pluginClient = new Client($this->soapClient);
        $pluginClient = new AuthenticationDecorator($pluginClient, $this->soapClient, $username, $password);
        $pluginClient = new LoggerDecorator($pluginClient, $this->soapClient, $logger);

        $responseMapper = new GetProductVersionsListResponseMapper();

        return new ProductInformationService($pluginClient, $responseMapper);
    }
}
