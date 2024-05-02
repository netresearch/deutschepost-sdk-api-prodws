<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model;

class GetProductVersionsListRequest
{
    private ?string $subMandantID = null;

    private ?bool $onlyChanges = null;

    private ?string $referenceDate = null;

    private ?bool $shortList = null;

    public function __construct(private string $mandantID, private bool $dedicatedProducts, private int $responseMode)
    {
    }

    public function setSubMandantID(string $subMandantID): void
    {
        $this->subMandantID = $subMandantID;
    }

    public function setOnlyChanges(bool $onlyChanges): void
    {
        $this->onlyChanges = $onlyChanges;
    }

    public function setReferenceDate(string $referenceDate): void
    {
        $this->referenceDate = $referenceDate;
    }

    public function setShortList(bool $shortList): void
    {
        $this->shortList = $shortList;
    }
}
