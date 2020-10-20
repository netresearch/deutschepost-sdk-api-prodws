<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class SpecialServiceList
{
    /**
     * @var SpecialServiceType|SpecialServiceType[] $SpecialService
     */
    private $SpecialService;

    /**
     * @return SpecialServiceType[]
     */
    public function getSpecialServices(): array
    {
        if (empty($this->SpecialService)) {
            return [];
        }

        if ($this->SpecialService instanceof SpecialServiceType) {
            return [$this->SpecialService];
        }

        return $this->SpecialService;
    }
}
