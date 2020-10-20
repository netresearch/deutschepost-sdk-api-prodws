<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Api;

use DeutschePost\Sdk\ProdWS\Exception\ServiceException;
use Psr\Log\LoggerInterface;

/**
 * @api
 */
interface ServiceFactoryInterface
{
    /**
     * Create the service instance to retrieve DPDHL product information.
     *
     * @param string $username
     * @param string $password
     * @param LoggerInterface $logger
     *
     * @return ProductInformationServiceInterface
     * @throws ServiceException
     */
    public function createProductInformationService(
        string $username,
        string $password,
        LoggerInterface $logger
    ): ProductInformationServiceInterface;
}
