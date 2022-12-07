<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Test\Provider;

class AuthenticationResponseProvider
{
    /**
     * User authentication fails, wrong username or invalid password.
     *
     * @return string[][]
     */
    public static function userAuthFailure(): array
    {
        return [
            'auth failed' => [\file_get_contents(__DIR__ . '/_files/auth/authenticationFailed.xml')]
        ];
    }
}
