<?php

namespace Core\Illuminate\Support\Facades;

abstract class Facades
{
    private static $instance;

    public function __construct()
    {
        self::$instance = self::resolveFacades();
    }

    public static function resolveFacades()
    {

    }

    public static function __callStatic($method, $arguments)
    {
        return self::$instance->$method(...$arguments);
    }

}