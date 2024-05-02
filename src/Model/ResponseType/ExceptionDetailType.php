<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ExceptionDetailType
{
    /**
     * @var int $errorNumber
     */
    public $errorNumber;

    /**
     * @var string $errorMessage
     */
    public $errorMessage;

    /**
     * @var string $errorDetail
     */
    public $errorDetail;

    public function getErrorNumber(): int
    {
        return $this->errorNumber;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getErrorDetail(): string
    {
        return $this->errorDetail;
    }
}
