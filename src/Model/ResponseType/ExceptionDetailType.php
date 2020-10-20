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

    /**
     * @return int
     */
    public function getErrorNumber(): int
    {
        return $this->errorNumber;
    }

    /**
     * @return string
     */
    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    /**
     * @return string
     */
    public function getErrorDetail(): string
    {
        return $this->errorDetail;
    }
}
