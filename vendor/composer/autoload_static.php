<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit894ca7e0ac2141be8cefd4698ad973c1
{
    public static $classMap = array (
        'Application' => __DIR__ . '/../..' . '/src/services/Application.php',
        'IndexCtrl' => __DIR__ . '/../..' . '/src/controllers/IndexCtrl.php',
        'InversionOfControl' => __DIR__ . '/../..' . '/src/services/InversionOfControl.php',
        'Konekcija' => __DIR__ . '/../..' . '/src/model/Konekcija.php',
        'Korisnik' => __DIR__ . '/../..' . '/src/model/Korisnik.php',
        'Podsetnik' => __DIR__ . '/../..' . '/src/model/Podsetnik.php',
        'Request' => __DIR__ . '/../..' . '/src/services/Request.php',
        'Router' => __DIR__ . '/../..' . '/src/services/Router.php',
        'Security' => __DIR__ . '/../..' . '/src/services/Security.php',
        'View' => __DIR__ . '/../..' . '/src/services/View.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit894ca7e0ac2141be8cefd4698ad973c1::$classMap;

        }, null, ClassLoader::class);
    }
}
