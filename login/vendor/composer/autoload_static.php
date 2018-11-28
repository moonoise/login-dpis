<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2655b8e8f4c2492f9293b481f05ca040
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dpis\\' => 5,
            'DpisLogin\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dpis\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'DpisLogin\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2655b8e8f4c2492f9293b481f05ca040::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2655b8e8f4c2492f9293b481f05ca040::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
