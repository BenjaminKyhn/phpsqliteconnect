<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89333825a591982e4ed9c322ef0b3e58
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
        'App\\Config' => __DIR__ . '/../..' . '/app/Config.php',
        'App\\SQLiteConnection' => __DIR__ . '/../..' . '/app/SQLiteConnection.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89333825a591982e4ed9c322ef0b3e58::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89333825a591982e4ed9c322ef0b3e58::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit89333825a591982e4ed9c322ef0b3e58::$classMap;

        }, null, ClassLoader::class);
    }
}