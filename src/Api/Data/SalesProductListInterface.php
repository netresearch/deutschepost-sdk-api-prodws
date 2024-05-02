<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Api\Data;

/**
 * PPL (product price list)
 *
 * @api
 */
interface SalesProductListInterface
{
    /**
     * Obtain unique ID in the ProdWS system.
     */
    public function getId(): int;

    /**
     * Obtain start date of the product revision.
     */
    public function getValidFrom(): \DateTime;

    /**
     * Obtain end date of the product revision.
     *
     * @return \DateTime
     */
    public function getValidTo(): ?\DateTime;

    /**
     * @return SalesProductInterface[]
     */
    public function getProducts(): array;
}
