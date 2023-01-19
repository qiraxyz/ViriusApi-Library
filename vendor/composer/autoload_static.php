<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7955ac9c324988c8787c0162e5bebb7f
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Viriusapi\\Viri\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Viriusapi\\Viri\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7955ac9c324988c8787c0162e5bebb7f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7955ac9c324988c8787c0162e5bebb7f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7955ac9c324988c8787c0162e5bebb7f::$classMap;

        }, null, ClassLoader::class);
    }
}