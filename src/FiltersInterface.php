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

interface FiltersInterface
{
    /**
     * `apply` method alias as a dropping substitution method.
     *
     * @template R
     * 
     * @param R $builder
     *
     * @return R|object
     */
    public function call($builder);

    /**
     * Invoke the current filters object on the platform builder instance.
     *
     * @template R
     * 
     * @param R $builder
     * @param mixed   $args
     *
     * @return R
     */
    public function invoke(string $method, $builder, $args);

    /**
     * Call query filters on the builder instance.
     *
     * @template T of object
     *
     * @param T $builder
     *
     * @return T
     */
    public function apply($builder);

    /**
     * Set the `filters` property to the value of the parameter.
     *
     * @return self
     */
    public function setQueryFilters(array $list);
}
