<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaed463bc18875b3dcd86a6762285d14b
{
    public static $files = array (
        '6e60481d8c04e99474e2ba7b3658ab5a' => __DIR__ . '/..' . '/php-activerecord/php-activerecord/ActiveRecord.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitaed463bc18875b3dcd86a6762285d14b::$classMap;

        }, null, ClassLoader::class);
    }
}
