<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class FormatedTextType
{
    /**
     * @var string|null $name
     */
    public $name;

    /**
     * @var TextRowType|TextRowType[] $textRow
     */
    public $textRow;

    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return TextRowType[]
     */
    public function getTextRows(): array
    {
        if (empty($this->textRow)) {
            return [];
        }

        if ($this->textRow instanceof TextRowType) {
            return [$this->textRow];
        }

        return $this->textRow;
    }
}
