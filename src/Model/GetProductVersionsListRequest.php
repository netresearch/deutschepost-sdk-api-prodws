<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model;

class GetProductVersionsListRequest
{
    /**
     * @var string $mandantID
     */
    private $mandantID;

    /**
     * @var string $subMandantID
     */
    private $subMandantID;

    /**
     * @var bool $dedicatedProducts
     */
    private $dedicatedProducts;

    /**
     * @var int $responseMode
     */
    private $responseMode;

    /**
     * @var bool $onlyChanges
     */
    private $onlyChanges;

    /**
     * @var string $referenceDate
     */
    private $referenceDate;

    /**
     * @var bool $shortList
     */
    private $shortList;

    public function __construct(string $mandantID, bool $dedicatedProducts, int $responseMode)
    {
        $this->mandantID = $mandantID;
        $this->dedicatedProducts = $dedicatedProducts;
        $this->responseMode = $responseMode;
    }

    /**
     * @param string $subMandantID
     */
    public function setSubMandantID(string $subMandantID): void
    {
        $this->subMandantID = $subMandantID;
    }

    /**
     * @param bool $onlyChanges
     */
    public function setOnlyChanges(bool $onlyChanges): void
    {
        $this->onlyChanges = $onlyChanges;
    }

    /**
     * @param string $referenceDate
     */
    public function setReferenceDate(string $referenceDate): void
    {
        $this->referenceDate = $referenceDate;
    }

    /**
     * @param bool $shortList
     */
    public function setShortList(bool $shortList): void
    {
        $this->shortList = $shortList;
    }
}
