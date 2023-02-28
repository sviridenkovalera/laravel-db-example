<?php
    require_once __DIR__ . "/db_init.php";

    use Illuminate\Database\Capsule\Manager as DB;


    DB::schema()->dropIfExists('users');