<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9099d81d2e2cf4863a68cf73354cfc1
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RegularLabs\\Library\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RegularLabs\\Library\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9099d81d2e2cf4863a68cf73354cfc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9099d81d2e2cf4863a68cf73354cfc1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}