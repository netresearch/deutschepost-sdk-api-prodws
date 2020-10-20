<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class DocumentReferenceList
{
    /**
     * @var DocumentReferenceType|DocumentReferenceType[] $documentReference
     */
    public $documentReference;

    /**
     * @return DocumentReferenceType[]
     */
    public function getDocumentReferences(): array
    {
        if (empty($this->documentReference)) {
            return [];
        }

        if ($this->documentReference instanceof DocumentReferenceType) {
            return [$this->documentReference];
        }

        return $this->documentReference;
    }
}
