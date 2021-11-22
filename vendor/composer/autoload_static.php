<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd94c902dd7bd57479014d560d5348b9
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd94c902dd7bd57479014d560d5348b9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd94c902dd7bd57479014d560d5348b9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfd94c902dd7bd57479014d560d5348b9::$classMap;

        }, null, ClassLoader::class);
    }
}
