<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d7ac8c363211f5e7d5e76f3bd629a59
{
    public static $classMap = array (
        'Player' => __DIR__ . '/../..' . '/classes/Player.php',
        'Unit' => __DIR__ . '/../..' . '/classes/Unit.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7d7ac8c363211f5e7d5e76f3bd629a59::$classMap;

        }, null, ClassLoader::class);
    }
}
