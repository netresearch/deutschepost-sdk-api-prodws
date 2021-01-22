<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Test\Provider;

class AuthenticationResponseProvider
{
    /**
     * User authentication fails, wrong user name or invalid password.
     *
     * @return string
     */
    public static function userAuthFailure(): string
    {
        return \file_get_contents(__DIR__ . '/_files/auth/authenticationFailed.xml');
    }
}
