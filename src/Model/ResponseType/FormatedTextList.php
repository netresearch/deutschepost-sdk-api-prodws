<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class FormatedTextList
{
    /**
     * @var FormatedTextType|FormatedTextType[] $formatedText
     */
    private $formatedText;

    /**
     * @return FormatedTextType[]
     */
    public function getFormattedTexts(): array
    {
        if (empty($this->formatedText)) {
            return [];
        }

        if ($this->formatedText instanceof FormatedTextType) {
            return [$this->formatedText];
        }

        return $this->formatedText;
    }
}
