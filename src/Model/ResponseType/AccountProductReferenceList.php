<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class AccountProductReferenceList
{
    /**
     * @var AccountProdReferenceType|AccountProdReferenceType[] $accountProductReference
     */
    private $accountProductReference;

    /**
     * @return AccountProdReferenceType[]
     */
    public function getAccountProductReferences(): array
    {
        if (empty($this->accountProductReference)) {
            return [];
        }

        if ($this->accountProductReference instanceof AccountProdReferenceType) {
            return [$this->accountProductReference];
        }

        return $this->accountProductReference;
    }
}
