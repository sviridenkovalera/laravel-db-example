<?php
    require_once __DIR__ . "/../vendor/autoload.php";

    use Illuminate\Database\Capsule\Manager as Capsule;

    $capsule = new Capsule;

    $capsule->addConnection([
        'driver' => 'mysql',
        'host' => 'db',
        'database' => 'database',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ]);


    // Make this Capsule instance available globally via static methods... (optional)
    $capsule->setAsGlobal();
