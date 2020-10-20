<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class FormulaExpressionType
{
    /**
     * @var string|null $condition
     */
    private $condition;

    /**
     * @var string $formula
     */
    private $formula;

    /**
     * @var FormulaComponentType|FormulaComponentType[] $formulaComponent
     */
    private $formulaComponent;

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function getFormula(): string
    {
        return $this->formula;
    }

    /**
     * @return FormulaComponentType[]
     */
    public function getFormulaComponents(): array
    {
        if (empty($this->formulaComponent)) {
            return [];
        }

        if ($this->formulaComponent instanceof FormulaComponentType) {
            return [$this->formulaComponent];
        }

        return $this->formulaComponent;
    }
}
