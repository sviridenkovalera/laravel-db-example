<?php
    require_once __DIR__ . "/db_init.php";

    use Illuminate\Database\Capsule\Manager as DB;

    DB::schema()->create('users', function ($table) {
        $table->increments('id');
        $table->string('email')->unique();
        $table->integer('votes');
        $table->timestamps();
    });


    DB::table('users')->insert([
        ['email' => 'user1@gmail.com', "votes" => 0],
        ['email' => 'user2@gmail.com', "votes" => 0],
        ['email' => 'user3@gmail.com', "votes" => 0],
    ]);