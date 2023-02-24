<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4f590dae25976193379c6a4b2320892
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sts\\' => 4,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sts\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/sts',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita4f590dae25976193379c6a4b2320892::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4f590dae25976193379c6a4b2320892::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4f590dae25976193379c6a4b2320892::$classMap;

        }, null, ClassLoader::class);
    }
}