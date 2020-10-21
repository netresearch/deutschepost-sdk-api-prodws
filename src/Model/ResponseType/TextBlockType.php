<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class TextBlockType
{
    /**
     * @var string|null $font
     */
    private $font;

    /**
     * @var float|null $size
     */
    private $size;

    /**
     * @var string|null $style
     */
    private $style;

    /**
     * @var bool|null $underline
     */
    private $underline;

    /**
     * @var string $text
     */
    private $text;

    public function getFont(): ?string
    {
        return $this->font;
    }

    public function getSize(): ?float
    {
        if ($this->size === null) {
            return $this->size;
        }

        // PHP SOAP sets this as string, although declared as "xs:decimal"
        return $this->size * 100 / 100;
    }

    public function getStyle(): ?string
    {
        return $this->style;
    }

    public function getUnderline(): ?bool
    {
        return $this->underline;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
