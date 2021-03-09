<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a94c9b02eacece51100ad41c76422be
{
    public static $files = array (
        '6258dfe9df6042e4c1d12dfa887f0e76' => __DIR__ . '/../..' . '/core/helper/functions.php',
        '1d84e43faf337863ebb78f523615e58a' => __DIR__ . '/../..' . '/core/helper/response.php',
    );

    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a94c9b02eacece51100ad41c76422be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a94c9b02eacece51100ad41c76422be::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3a94c9b02eacece51100ad41c76422be::$classMap;

        }, null, ClassLoader::class);
    }
}