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

interface TransactionClientInterface
{
    /**
     * Start a transaction operation.
     *
     * @return void
     */
    public function begin();

    /**
     * Complete or commit a started transaction operation.
     *
     * @return void
     */
    public function commit();

    /**
     * Rollback back a transaction to it initial state.
     *
     * @return mixed
     */
    public function rollBack();
}
