<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Api\Data;

/**
 * Value-added service or additional shipping option to be combined with basic products.
 *
 * @api
 */
interface ProductAdditionInterface
{
    /**
     * Obtain unique ID in the ProdWS system.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Obtain name of product addition in the ProdWS system.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Obtain product addition revision number in the ProdWS system.
     *
     * @return int
     */
    public function getVersion(): int;

    /**
     * Obtain shipping destination of the product addition.
     *
     * @return string enum, national or international
     */
    public function getDestination(): string;

    /**
     * Obtain gross price of the product addition.
     *
     * @return ValueInterface
     */
    public function getPrice(): ValueInterface;

    /**
     * Obtain start date of the product addition revision.
     *
     * @return \DateTime
     */
    public function getValidFrom(): \DateTime;

    /**
     * Obtain end date of the product addition revision.
     *
     * @return \DateTime|null
     */
    public function getValidTo(): ?\DateTime;
}
