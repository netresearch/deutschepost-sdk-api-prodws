<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Test\Provider;

class GetProductVersionsListResponseProvider
{
    /**
     * Provide test cases for successful API communication.
     *
     * (1) Products are updated while only one list is active.
     * (2) Products are updated while one list is about to expire and the upcoming list is ready.
     *
     * @return string[][]
     */
    public static function success(): array
    {
        return [
            'single list' => [\file_get_contents(__DIR__ . '/_files/products/getProductVersionsList.xml')],
            'multi list' => [\file_get_contents(__DIR__ . '/_files/products/getMultiProductVersionsList.xml')],
        ];
    }

    public static function mandantError(): array
    {
        return [
            'mandant error' => [\file_get_contents(__DIR__ . '/_files/products/unknownMandantException.xml')],
        ];
    }
}
