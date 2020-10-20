<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class TempPriceList
{
    /**
     * @var TempPriceType|TempPriceType[] $tempPrice
     */
    private $tempPrice;

    /**
     * @return TempPriceType[]
     */
    public function getTempPrices(): array
    {
        if (empty($this->tempPrice)) {
            return [];
        }

        if ($this->tempPrice instanceof TempPriceType) {
            return [$this->tempPrice];
        }

        return $this->tempPrice;
    }
}
