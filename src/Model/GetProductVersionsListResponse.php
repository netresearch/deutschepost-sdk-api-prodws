<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model;

use DeutschePost\Sdk\ProdWS\Model\ResponseType\ExceptionDetailType;
use DeutschePost\Sdk\ProdWS\Model\ResponseType\GetProductVersionsListResponseType;

class GetProductVersionsListResponse
{
    /**
     * @var GetProductVersionsListResponseType $Response
     */
    private $Response;

    /**
     * @var ExceptionDetailType|ExceptionDetailType[] $Exception
     */
    private $Exception;

    /**
     * @var bool $success
     */
    private $success;

    /**
     * @return GetProductVersionsListResponseType
     */
    public function getResponse(): GetProductVersionsListResponseType
    {
        return $this->Response;
    }

    /**
     * @return ExceptionDetailType[]
     */
    public function getException(): array
    {
        if (empty($this->Exception)) {
            return [];
        }

        if ($this->Exception instanceof ExceptionDetailType) {
            return [$this->Exception];
        }

        return $this->Exception;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool
    {
        return $this->success;
    }
}
