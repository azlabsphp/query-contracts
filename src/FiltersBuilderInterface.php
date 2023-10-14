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

interface FiltersBuilderInterface extends BuilderInterface
{

    /**
     * Get the builded query filters.
     *
     * **Note**
     * If an argument is passed in the implementation
     * must be able to resolve specific filter value.
     *
     * @return array|mixed
     */
    public function getQuery(string $method = null);
}
