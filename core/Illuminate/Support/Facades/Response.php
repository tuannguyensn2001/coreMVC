<?php


namespace Core\Illuminate\Support\Facades;


class Response
{
    public static function __callStatic($method, $arguments)
    {
        if (!method_exists(self::resolved(),$method)) {
            throw new \Exception('Phương thức không tồn tại');
        }
        return self::resolved()->$method(...$arguments);
    }

    public static function resolved(): \Core\Illuminate\Response\Response
    {
        return new \Core\Illuminate\Response\Response();
    }
}