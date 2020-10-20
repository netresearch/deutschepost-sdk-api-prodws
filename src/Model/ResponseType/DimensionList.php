<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class DimensionList
{
    /**
     * @var NumericValueType|null $length
     */
    private $length;

    /**
     * @var NumericValueType|null $width
     */
    private $width;

    /**
     * @var NumericValueType|null $height
     */
    private $height;

    /**
     * @var NumericValueType|null $diameter
     */
    private $diameter;

    /**
     * @var NumericValueType|null $girth
     */
    private $girth;

    /**
     * @var NumericValueType|null $addedEdgeLength
     */
    private $addedEdgeLength;

    public function getLength(): ?NumericValueType
    {
        return $this->length;
    }

    public function getWidth(): ?NumericValueType
    {
        return $this->width;
    }

    public function getHeight(): ?NumericValueType
    {
        return $this->height;
    }

    public function getDiameter(): ?NumericValueType
    {
        return $this->diameter;
    }

    public function getGirth(): ?NumericValueType
    {
        return $this->girth;
    }

    public function getAddedEdgeLength(): ?NumericValueType
    {
        return $this->addedEdgeLength;
    }
}
