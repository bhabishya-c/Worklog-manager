<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit040d339cd27b6fc46dccb9d0c1c125ee
{
    public static $classMap = array (
        'ComposerAutoloaderInit040d339cd27b6fc46dccb9d0c1c125ee' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit040d339cd27b6fc46dccb9d0c1c125ee' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Pagescontroller' => __DIR__ . '/../..' . '/Controller/Pagescontroller.php',
        'Project3\\app\\App' => __DIR__ . '/../..' . '/App.php',
        'Project3\\router\\Router' => __DIR__ . '/../..' . '/router.php',
        'db\\connect\\database' => __DIR__ . '/../..' . '/db/databaseconnection.php',
        'db\\query\\Querybuilder' => __DIR__ . '/../..' . '/db/Querybuilder.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit040d339cd27b6fc46dccb9d0c1c125ee::$classMap;

        }, null, ClassLoader::class);
    }
}
