<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Test\Provider;

class GetProductVersionsListResponseProvider
{
    public static function success(): string
    {
        return \file_get_contents(__DIR__ . '/_files/products/getProductVersionsList.xml');
    }

    public static function mandantError(): string
    {
        return \file_get_contents(__DIR__ . '/_files/products/unknownMandantException.xml');
    }
}
