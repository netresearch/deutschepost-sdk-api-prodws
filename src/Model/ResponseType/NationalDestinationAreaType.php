<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class NationalDestinationAreaType
{
    /**
     * @var NationalZipCodeListType|NationalZipCodeListType[] $nationalZipCodeList
     */
    private $nationalZipCodeList;

    /**
     * @var NationalZipCodeGroupType|NationalZipCodeGroupType[] $nationalZipCodeGroup
     */
    private $nationalZipCodeGroup;

    /**
     * @return NationalZipCodeListType[]
     */
    public function getNationalZipCodeLists(): array
    {
        if (empty($this->nationalZipCodeList)) {
            return [];
        }

        if ($this->nationalZipCodeList instanceof NationalZipCodeListType) {
            return [$this->nationalZipCodeList];
        }

        return $this->nationalZipCodeList;
    }

    /**
     * @return NationalZipCodeGroupType[]
     */
    public function getNationalZipCodeGroups(): array
    {
        if (empty($this->nationalZipCodeGroup)) {
            return [];
        }

        if ($this->nationalZipCodeGroup instanceof NationalZipCodeGroupType) {
            return [$this->nationalZipCodeGroup];
        }

        return $this->nationalZipCodeGroup;
    }
}
