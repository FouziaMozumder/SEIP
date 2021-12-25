<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4a4752dff58dc177827c4d8b187ba0d
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite4a4752dff58dc177827c4d8b187ba0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4a4752dff58dc177827c4d8b187ba0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4a4752dff58dc177827c4d8b187ba0d::$classMap;

        }, null, ClassLoader::class);
    }
}
