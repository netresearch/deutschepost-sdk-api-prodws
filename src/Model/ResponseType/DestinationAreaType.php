<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class DestinationAreaType
{
    /**
     * @var NationalDestinationAreaType|null $nationalDestinationArea
     */
    private $nationalDestinationArea;

    /**
     * @var InternationalDestinationAreaType|null $internationalDestinationArea
     */
    private $internationalDestinationArea;

    public function getNationalDestinationArea(): ?NationalDestinationAreaType
    {
        return $this->nationalDestinationArea;
    }

    public function getInternationalDestinationArea(): ?InternationalDestinationAreaType
    {
        return $this->internationalDestinationArea;
    }
}
