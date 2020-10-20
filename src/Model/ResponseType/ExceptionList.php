<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ExceptionList
{
    /**
     * @var ExceptionDetailType|ExceptionDetailType[] $exceptionDetail
     */
    private $exceptionDetail;

    /**
     * @return ExceptionDetailType[]
     */
    public function getExceptions(): array
    {
        if (empty($this->exceptionDetail)) {
            return [];
        }

        if ($this->exceptionDetail instanceof ExceptionDetailType) {
            return [$this->exceptionDetail];
        }

        return $this->exceptionDetail;
    }
}
