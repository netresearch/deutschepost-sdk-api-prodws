<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Service;

use DeutschePost\Sdk\ProdWS\Api\ProductInformationServiceInterface;
use DeutschePost\Sdk\ProdWS\Api\ServiceFactoryInterface;
use DeutschePost\Sdk\ProdWS\Exception\ServiceException;
use DeutschePost\Sdk\ProdWS\Serializer\ClassMap;
use DeutschePost\Sdk\ProdWS\Soap\SoapServiceFactory;
use Psr\Log\LoggerInterface;

class ServiceFactory implements ServiceFactoryInterface
{
    public function createProductInformationService(
        string $username,
        string $password,
        LoggerInterface $logger
    ): ProductInformationServiceInterface {
        $wsdl = 'https://prodws.deutschepost.de:8443/ProdWSProvider_1_1/prodws?wsdl';
        $options = [
            'trace' => 1,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap' => ClassMap::get(),
        ];

        try {
            $soapClient = new \SoapClient($wsdl, $options);
        } catch (\SoapFault $soapFault) {
            throw new ServiceException($soapFault->getMessage(), $soapFault->getCode(), $soapFault);
        }

        $soapServiceFactory = new SoapServiceFactory($soapClient);
        return $soapServiceFactory->createProductInformationService($username, $password, $logger);
    }
}
