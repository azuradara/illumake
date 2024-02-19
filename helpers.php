<?php

use Illuminate\Container\Container;
use Illuminate\Contracts\Container\BindingResolutionException;

if (!function_exists('make')) {
    /**
     * @template TClass
     *
     * @param class-string<TClass> $abstract
     *
     * @return TClass
     * @throws BindingResolutionException
     */
    function make(string $abstract, array $parameters = [])
    {
        return Container::getInstance()->make($abstract, $parameters);
    }
}
