<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class ReferenceTextList
{
    /**
     * @var FormatedTextType|FormatedTextType[] $referenceText
     */
    private $referenceText;

    /**
     * @return FormatedTextType[]
     */
    public function getReferenceTexts(): array
    {
        if (empty($this->referenceText)) {
            return [];
        }

        if ($this->referenceText instanceof FormatedTextType) {
            return [$this->referenceText];
        }

        return $this->referenceText;
    }
}
