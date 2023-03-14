<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef253a3c98a567d03a1994defd4f9be0
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Grav\\Plugin\\DirGallery\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Grav\\Plugin\\DirGallery\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Grav\\Plugin\\DirGalleryPlugin' => __DIR__ . '/../..' . '/dir-gallery.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef253a3c98a567d03a1994defd4f9be0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef253a3c98a567d03a1994defd4f9be0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitef253a3c98a567d03a1994defd4f9be0::$classMap;

        }, null, ClassLoader::class);
    }
}
