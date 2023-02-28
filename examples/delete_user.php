<?php

    require_once __DIR__ . "/db_init.php";

    use Illuminate\Database\Capsule\Manager as DB;

    DB::table('users')->where("id", 3)->delete();
