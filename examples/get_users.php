<?php

    require_once __DIR__ . "/db_init.php";

    use Illuminate\Database\Capsule\Manager as DB;

    $id = 1;

    echo sprintf("<br>%d) Все<br>", $id++);

    $users = DB::table('users')->get();

    foreach ($users as $user) {
        echo sprintf("Email: %s Votes: %d<br>", $user->email, $user->votes);
    }


    echo sprintf("<br>%d) Порядок сортировки<br>", $id++);


    $users = DB::table('users')->orderBy('id', 'desc')->get();

    foreach ($users as $user) {
        echo sprintf("Email: %s Votes: %d<br>", $user->email, $user->votes);
    }

    echo sprintf("<br>%d) Первый<br>", $id++);


    $user = DB::table('users')->first();

    echo sprintf("Email: %s Votes: %d<br>", $user->email, $user->votes);


    echo sprintf("<br>%d) Последний<br>", $id++);


    $user = DB::table('users')->latest()->first();

    echo sprintf("Email: %s Votes: %d<br>", $user->email, $user->votes);


    echo sprintf("<br>%d) Count<br>", $id++);

    $count = DB::table('users')->count();

    echo sprintf("Count: %d<br>", $count);



    echo sprintf("<br>%d) Where id > 1<br>", $id++);


    $users = DB::table('users')->where('id', '>', 1)->get();

    foreach ($users as $user) {
        echo sprintf("Email: %s Votes: %d<br>", $user->email, $user->votes);
    }


    echo sprintf("<br>%d) Сумма<br>", $id++);

    $total = DB::table('users')->sum("votes");

    echo sprintf("Total votes: %d<br>", $total);