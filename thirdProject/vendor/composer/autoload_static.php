<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6d68eee3c8a89166dd9d3392df612f90
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6d68eee3c8a89166dd9d3392df612f90::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6d68eee3c8a89166dd9d3392df612f90::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6d68eee3c8a89166dd9d3392df612f90::$classMap;

        }, null, ClassLoader::class);
    }
}
