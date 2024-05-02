<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Api;

use Psr\Log\LoggerInterface;

/**
 * @api
 */
interface ServiceFactoryInterface
{
    /**
     * Create the service instance to retrieve DPDHL product information.
     *
     *
     * @throws \RuntimeException
     */
    public function createProductInformationService(
        string $username,
        string $password,
        LoggerInterface $logger
    ): ProductInformationServiceInterface;
}
