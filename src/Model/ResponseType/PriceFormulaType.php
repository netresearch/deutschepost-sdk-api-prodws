<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Model\ResponseType;

class PriceFormulaType
{
    /**
     * @var string $expression
     */
    private $expression;

    /**
     * @var string|null $agenda
     */
    private $agenda;

    /**
     * @var FormulaExpressionType|FormulaExpressionType[] $formulaExpression
     */
    private $formulaExpression;

    public function getExpression(): string
    {
        return $this->expression;
    }

    public function getAgenda(): ?string
    {
        return $this->agenda;
    }

    /**
     * @return FormulaExpressionType[]
     */
    public function getFormulaExpressions(): array
    {
        if (empty($this->formulaExpression)) {
            return [];
        }

        if ($this->formulaExpression instanceof FormulaExpressionType) {
            return [$this->formulaExpression];
        }

        return $this->formulaExpression;
    }
}
