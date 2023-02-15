<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2065e254e4fc81f5ff692f85a8aa2bad
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2065e254e4fc81f5ff692f85a8aa2bad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2065e254e4fc81f5ff692f85a8aa2bad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2065e254e4fc81f5ff692f85a8aa2bad::$classMap;

        }, null, ClassLoader::class);
    }
}
