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

interface QueryLanguageInterface
{
    /**
     * Insert a new row to the database.
     *
     * @param array ...$args
     */
    public function create(...$args);

    /**
     * Insert many row into the database.
     *
     * @return bool
     */
    public function createMany(array $attributes);

    /**
     * Perform a DELETE operation on the models matching the provided query parameters.
     *
     * @param array ...$args
     */
    public function delete(...$args);

    /**
     * Retrieve all row/models matching a given query criteria from the database.
     *
     * $dto_transform_fn if passed in with try to apply data transformation to the return result.
     *
     * Note: $dto_transform_fn must be a \Closure or PHP Callable that takes {EnumerableResultInterface} as parameter
     *
     * <code>
     * <?php
     *      $instance->select($query, $columns, false, function(\Drewlabs\Query\Contracts\EnumerableResultInterface $result ) {
     *          // Code to perform transformation
     *          return $transformed_values;
     *      })
     * ?>
     * </code>
     *
     * <code>
     * <?php
     *      $instance->select($id, $columns, false, function( $model ) {
     *          // Code to perform transformation
     *          return $transformed_model;
     *      })
     * ?>
     * </code>
     *
     * @param array ...$args
     */
    public function select(...$args);

    /**
     * Update a row/model from the database.
     *
     * Returns the update model with it properties or the transformed value returned the $dto_transform_fn callback
     */
    public function update(...$params);

    /**
     * Run an aggregation method on a query builder result.
     *
     * @return int|mixed
     */
    public function aggregate(array $query = [], string $method = 'count');
}
