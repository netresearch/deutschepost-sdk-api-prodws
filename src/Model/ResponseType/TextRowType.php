<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class TextRowType
{
    /**
     * @var TextBlockType|TextBlockType[] $textBlock
     */
    private $textBlock;

    /**
     * @return TextBlockType[]
     */
    public function getTextBlocks(): array
    {
        if (empty($this->textBlock)) {
            return [];
        }

        if ($this->textBlock instanceof TextBlockType) {
            return [$this->textBlock];
        }

        return $this->textBlock;
    }
}
