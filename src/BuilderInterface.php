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

interface BuilderInterface
{

    /**
     * add `and` query.
     *
     * @param string|\Closure $column
     * @param mixed|null      $value
     *
     * @return static|object
     */
    public function and($column, ?string $operator = null, $value = null);

    /**
     * add `or` query.
     *
     * @param string|\Closure $column
     * @param mixed|null      $value
     *
     * @return static|object
     */
    public function or($column, ?string $operator = null, $value = null);

    /**
     * apply `date` query.
     *
     * @param string                    $column
     * @param string                    $operator
     * @param \DateTimeInterface|string $value
     *
     * @return static|object
     */
    public function date($column, ?string $operator = null, $value = null);

    /**
     * apply `or date` query.
     *
     * @param string                    $column
     * @param string                    $operator
     * @param \DateTimeInterface|string $value
     *
     * @return static|object
     */
    public function orDate($column, ?string $operator = null, $value = null);

    /**
     * add `in` query.
     *
     * @return static|object
     */
    public function in(string $column, array $values);

    /**
     * add `not in query`.
     *
     * @return static|object
     */
    public function notIn(string $column, array $values);

    /**
     * add `exists` query.
     *
     * @param string|\Closure(self $builder):self $query
     *
     * @return static|object
     */
    public function exists(string $column, $query = null);

    /**
     * add `or exists` query.
     *
     * @param string|\Closure(self $builder):self $query
     *
     * @return static|object
     */
    public function orExists(string $column, $query = null);

    /**
     * add `not exists` query.
     *
     * @param string|\Closure(self $builder):self $query
     *
     * @return static|object
     */
    public function notExists(string $column, $query = null);

    /**
     * add `or not exists` query.
     *
     * @param string|\Closure(self $builder):self $query
     *
     * @return static|object
     */
    public function orNotExists(string $column, $query = null);

    /**
     * add `sort` query.
     *
     * @return static|object
     */
    public function sort(string $column, int $order = 1);

    /**
     * add `is null` query.
     *
     * @return static|object
     */
    public function isNull(string $column);

    /**
     * add `or is null` query.
     *
     * @return static|object
     */
    public function orIsNull(string $column);

    /**
     * add `not null` query.
     *
     * @return static|object
     */
    public function notNull(string $column);

    /**
     * add `or not null` query.
     *
     * @return static|object
     */
    public function orNotNull(string $column);

    /**
     * add `between` query.
     *
     * @param iterable $values
     *
     * @return static|object
     */
    public function between(string $column, $values);

    /**
     * add `group by` query.
     *
     * @return static|object
     */
    public function group(string $column);

    /**
     * add `join` query.
     *
     * @return static|object
     */
    public function join(string $table, string $first, string $operator, string $second);

    /**
     * add `limit` query.
     *
     * @return static|object
     */
    public function limit(int $limit);

    /**
     * Set the list of columns to include in the rest query result.
     *
     * @param string[] $columns
     *
     * @return static
     */
    public function select(...$columns);
}
