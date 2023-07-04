<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf8035839769f19d9470c12fccf779ec6
{
    public static $classMap = array (
        'ComposerAutoloaderInitf8035839769f19d9470c12fccf779ec6' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitf8035839769f19d9470c12fccf779ec6' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\controllers\\PageController' => __DIR__ . '/../..' . '/app/controllers/PageController.php',
        'core\\Database\\Connection' => __DIR__ . '/../..' . '/core/Database/Connnect.php',
        'core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf8035839769f19d9470c12fccf779ec6::$classMap;

        }, null, ClassLoader::class);
    }
}
