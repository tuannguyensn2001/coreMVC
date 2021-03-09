<?php

namespace Core\Illuminate\Support\Facades;


use mysql_xdevapi\Exception;

class Route
{
    public static function __callStatic($method, $arguments)
    {
        if (!method_exists(self::resolved(),$method)) {
            throw new \Exception('Phương thức không tồn tại');
        }
        return self::resolved()->$method(...$arguments);
    }

    public static function resolved()
    {
        return new \Core\Illuminate\Routing\Route();
    }
}