<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita182f3137e3cd107fd7bbb7c3ca4fedf
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita182f3137e3cd107fd7bbb7c3ca4fedf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita182f3137e3cd107fd7bbb7c3ca4fedf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita182f3137e3cd107fd7bbb7c3ca4fedf::$classMap;

        }, null, ClassLoader::class);
    }
}
