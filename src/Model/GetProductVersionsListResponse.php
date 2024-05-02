<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model;

use DeutschePost\Sdk\ProdWS\Model\ResponseType\ExceptionList;
use DeutschePost\Sdk\ProdWS\Model\ResponseType\GetProductVersionsListResponseType;

class GetProductVersionsListResponse
{
    /**
     * @var GetProductVersionsListResponseType|null $Response
     */
    private $Response;

    /**
     * @var ExceptionList|null $Exception
     */
    private $Exception;

    /**
     * @var bool $success
     */
    private $success;

    public function getResponse(): ?GetProductVersionsListResponseType
    {
        return $this->Response;
    }

    public function getExceptionList(): ?ExceptionList
    {
        return $this->Exception;
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }
}
