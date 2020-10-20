<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class GetProductVersionsListResponseType
{
    /**
     * @var SalesProductList|null $salesProductList
     */
    private $salesProductList;

    /**
     * @var BasicProductList|null $basicProductList
     */
    private $basicProductList;

    /**
     * @var AdditionalProductList|null $additionalProductList
     */
    private $additionalProductList;

    /**
     * @var SpecialServiceList|null $specialServiceList
     */
    private $specialServiceList;

    /**
     * @var ShortSalesProductList|null $shortSalesProductList
     */
    private $shortSalesProductList;

    /**
     * @var string|null $message
     */
    private $message;

    public function getSalesProductList(): ?SalesProductList
    {
        return $this->salesProductList;
    }

    public function getBasicProductList(): ?BasicProductList
    {
        return $this->basicProductList;
    }

    public function getAdditionalProductList(): ?AdditionalProductList
    {
        return $this->additionalProductList;
    }

    public function getSpecialServiceList(): ?SpecialServiceList
    {
        return $this->specialServiceList;
    }

    public function getShortSalesProductList(): ?ShortSalesProductList
    {
        return $this->shortSalesProductList;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }
}
