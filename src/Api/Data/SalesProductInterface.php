<?php

/**
 * See LICENSE.md for license details.
 */

declare(strict_types=1);

namespace DeutschePost\Sdk\ProdWS\Api\Data;

/**
 * Sales product, can be ordered.
 *
 * A sales product is a combination of basic product and optional product additions.
 *
 * @api
 */
interface SalesProductInterface
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
     * Obtain unique ID in the PPL system.
     *
     * @return string
     */
    public function getPPLId(): string;

    /**
     * Obtain shipping destination of the product.
     *
     * @return string enum, national or international
     */
    public function getDestination(): string;

    /**
     * Obtain gross price of the product.
     *
     * @return ValueInterface
     */
    public function getPrice(): ValueInterface;

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
     * Note that e.g. "Postkarte" product has no volume and therefore no weight limitations.
     *
     * @return ValueRangeInterface|null
     */
    public function getWeight(): ?ValueRangeInterface;

    /**
     * Obtain the sales product's components.
     *
     * @return SalesProductComponentsInterface
     */
    public function getComponents(): SalesProductComponentsInterface;
}
