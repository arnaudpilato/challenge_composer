<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitca7daaeca8ca56763f6fb2b3871bb8f5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Wcs\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Wcs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Wcs',
        ),
    );

    public static $classMap = array (
        'App\\Wcs\\Hello' => __DIR__ . '/../..' . '/src/Wcs/Hello.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitca7daaeca8ca56763f6fb2b3871bb8f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitca7daaeca8ca56763f6fb2b3871bb8f5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitca7daaeca8ca56763f6fb2b3871bb8f5::$classMap;

        }, null, ClassLoader::class);
    }
}
