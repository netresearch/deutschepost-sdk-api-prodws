# Deutsche Post DHL Group Product Information API SDK

The DPDHL Product Information API SDK package offers an interface to the following web services:

- ProdWS 1.1

## Requirements

### System Requirements

- PHP 8.1+ with SOAP extension

### Package Requirements

- `psr/log`: PSR-3 logger interfaces

### Development Package Requirements

- `phpunit/phpunit`: Testing framework

## Installation

```bash
$ composer require deutschepost/sdk-api-prodws
```

## Uninstallation

```bash
$ composer remove deutschepost/sdk-api-prodws
```

## Testing

```bash
$ ./vendor/bin/phpunit -c test/phpunit.xml
```

## Features

The DPDHL Product Information API SDK supports the following features:

* Get Product Versions List

### Get Product Versions List

Obtain the versioned lists of sales products and their components (basic products and additions).

#### Public API

The library's components suitable for consumption comprise

* services:
  * service factory
  * product information service
* data transfer objects:
  * product list

#### Usage

```php
$logger = new \Psr\Log\NullLogger();
$serviceFactory = new \DeutschePost\Sdk\ProdWS\Service\ServiceFactory();
$service = $serviceFactory->createProductInformationService('user', 'password', $logger);
$productLists = $service->getProductLists('MANDANT_ID');
```
