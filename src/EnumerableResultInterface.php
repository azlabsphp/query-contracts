<?php

declare(strict_types=1);

/*
 * This file is part of the drewlabs namespace.
 *
 * (c) Sidoine Azandrew <azandrewdevelopper@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Drewlabs\Query\Contracts;

/**
 * @template T
 * @psalm-template T
 */
interface EnumerableResultInterface extends \ArrayAccess
{
    /**
     * Returns collection items.
     *
     *
     * @return T
     */
    public function getCollection();

    /**
     * alias for `getCollection()`.
     *
     *
     * @return T
     */
    public function items();

    /**
     * Set result items.
     *
     * @param mixed $items
     *
     * @return static
     */
    public function setCollection($items);
}
