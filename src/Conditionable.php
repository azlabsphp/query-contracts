<?php

namespace Drewlabs\Query\Contracts;

interface Conditionable
{
    /**
     * @template TWhenParameter
     * @template TWhenReturnType
     * 
     * @param (\Closure($this): TWhenParameter)|TWhenParameter|null $value
     * @param  (callable($this, TWhenParameter): TWhenReturnType)|null  $callback
     * @param  (callable($this, TWhenParameter): TWhenReturnType)|null  $default
     * 
     * @return static|FiltersBuilderInterface 
     */
    public function when($value, ?callable $query = null, ?callable $default = null);
}