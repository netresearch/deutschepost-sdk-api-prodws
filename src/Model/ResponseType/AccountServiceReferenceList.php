<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class AccountServiceReferenceList
{
    /**
     * @var AccountProdReferenceType|AccountProdReferenceType[] $accountServiceReference
     */
    private $accountServiceReference;

    /**
     * @return AccountProdReferenceType[]
     */
    public function getAccountServiceReference(): array
    {
        if (empty($this->accountServiceReference)) {
            return [];
        }

        if ($this->accountServiceReference instanceof AccountProdReferenceType) {
            return [$this->accountServiceReference];
        }

        return $this->accountServiceReference;
    }
}
