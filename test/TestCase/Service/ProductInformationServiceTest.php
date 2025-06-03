<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Test\TestCase\Service;

use DeutschePost\Sdk\ProdWS\Api\Data\BasicProductInterface;
use DeutschePost\Sdk\ProdWS\Api\Data\SalesProductInterface;
use DeutschePost\Sdk\ProdWS\Api\Data\SalesProductListInterface;
use DeutschePost\Sdk\ProdWS\Exception\ServiceException;
use DeutschePost\Sdk\ProdWS\Soap\SoapServiceFactory;
use DeutschePost\Sdk\ProdWS\Test\Expectation\CommunicationExpectation;
use DeutschePost\Sdk\ProdWS\Test\Provider\AuthenticationResponseProvider;
use DeutschePost\Sdk\ProdWS\Test\Provider\GetProductVersionsListResponseProvider;
use DeutschePost\Sdk\ProdWS\Test\TestCase\SoapServiceTestCase;
use Psr\Log\Test\TestLogger;

class ProductInformationServiceTest extends SoapServiceTestCase
{
    public static function successDataProvider(): array
    {
        return GetProductVersionsListResponseProvider::success();
    }

    public static function authFailureDataProvider(): array
    {
        return AuthenticationResponseProvider::userAuthFailure();
    }

    public static function mandantErrorDataProvider(): array
    {
        return GetProductVersionsListResponseProvider::mandantError();
    }

    /**
     * Scenario: Retrieve product list from the web service.
     *
     * Assert that
     * - service response is a non-empty array of product list(s)
     * - communication gets logged
     *
     *
     * @throws ServiceException
     * @throws \ReflectionException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('successDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function retrieveProductLists(string $responseXml): void
    {
        $logger = new TestLogger();

        $soapClient = $this->getSoapClientMock([$responseXml]);
        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createProductInformationService('user', 'password', $logger);
        $productLists = $service->getProductLists('MANDANT_ID');

        self::assertIsArray($productLists);
        self::assertNotEmpty($productLists);
        self::assertContainsOnlyInstancesOf(SalesProductListInterface::class, $productLists);

        foreach ($productLists as $productList) {
            $products = $productList->getProducts();
            self::assertIsArray($products);
            self::assertNotEmpty($products);
            self::assertContainsOnlyInstancesOf(SalesProductInterface::class, $products);
            foreach ($products as $product) {
                $productComponents = $product->getComponents();
                self::assertInstanceOf(BasicProductInterface::class, $productComponents->getBasicProduct());
                self::assertStringContainsString($productComponents->getBasicProduct()->getName(), $product->getName());

                self::assertIsArray($productComponents->getProductAdditions());
            }
        }
    }

    /**
     * Scenario: User credentials are wrong.
     *
     * Assert that
     * - only instances of ServiceException get thrown
     * - communication gets logged with ERROR severity
     *
     *
     * @throws ServiceException
     * @throws \ReflectionException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('authFailureDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function authError(string $responseXml): void
    {
        $this->expectException(ServiceException::class);

        $logger = new TestLogger();

        $soapClient = $this->getSoapClientMock([$responseXml]);
        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createProductInformationService('user', 'wr0ngPa55', $logger);

        try {
            $service->getProductLists('MANDANT_ID');
        } catch (ServiceException $exception) {
            // Assert communication gets logged.
            CommunicationExpectation::assertErrorsLogged(
                $soapClient->__getLastRequest(),
                $soapClient->__getLastResponse(),
                $logger
            );

            $this->assertNotFalse(strpos($exception->getMessage(), 'Authentication failed'));

            throw $exception;
        }
    }

    /**
     * Scenario: Mandant ID is wrong.
     *
     * Assert that
     * - only instances of ServiceException get thrown
     * - communication gets logged with ERROR severity
     *
     *
     * @throws ServiceException
     * @throws \ReflectionException
     */
    #[\PHPUnit\Framework\Attributes\DataProvider('mandantErrorDataProvider')]
    #[\PHPUnit\Framework\Attributes\Test]
    public function mandantError(string $responseXml): void
    {
        $this->expectException(ServiceException::class);

        $logger = new TestLogger();

        $soapClient = $this->getSoapClientMock([$responseXml]);
        $serviceFactory = new SoapServiceFactory($soapClient);
        $service = $serviceFactory->createProductInformationService('user', 'password', $logger);

        try {
            $service->getProductLists('FOOBAR');
        } catch (ServiceException $exception) {
            // Assert communication gets logged.
            CommunicationExpectation::assertErrorsLogged(
                $soapClient->__getLastRequest(),
                $soapClient->__getLastResponse(),
                $logger
            );

            $this->assertNotFalse(strpos($exception->getMessage(), 'Unbekannter Mandant'));

            throw $exception;
        }
    }
}
