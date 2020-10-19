<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Api\Data;

/**
 * Basic product, cannot be ordered standalone.
 *
 * Basic products may be combined with a product addition to form a sales product.
 *
 * @api
 */
interface BasicProductInterface
{
    /**
     * Obtain unique ID in the ProdWS system.
     *
     * @return string
     */
    public function getId(): string;

    /**
     * Obtain name of product in the ProdWS system.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Obtain product revision number in the ProdWS system.
     *
     * @return int
     */
    public function getVersion(): int;

    /**
     * Obtain shipping destination of the product.
     *
     * @return string enum, national or international
     */
    public function getDestination(): string;

    /**
     * Obtain start date of the product revision.
     *
     * @return \DateTime
     */
    public function getValidFrom(): \DateTime;

    /**
     * Obtain end date of the product revision.
     *
     * @return \DateTime
     */
    public function getValidTo(): \DateTime;

    /**
     * Obtain gross price of the product.
     *
     * @return int Amount in euro cent.
     */
    public function getPrice(): int;

    /**
     * Obtain min and max length of the product.
     *
     * @return ValueRangeInterface
     */
    public function getLength(): ValueRangeInterface;

    /**
     * Obtain min and max width of the product.
     *
     * @return ValueRangeInterface
     */
    public function getWidth(): ValueRangeInterface;

    /**
     * Obtain min and max height of the product.
     *
     * @return ValueRangeInterface
     */
    public function getHeight(): ValueRangeInterface;

    /**
     * Obtain min and max weight of the product.
     *
     * @return ValueRangeInterface
     */
    public function getWeight(): ValueRangeInterface;
}
