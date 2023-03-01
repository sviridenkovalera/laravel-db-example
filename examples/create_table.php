<?php
    require_once __DIR__ . "/db_init.php";

    use Illuminate\Database\Capsule\Manager as DB;

    use App\Tables\User;

    DB::schema()->create(User::table_name, function ($table) {
        $table->increments(User::id);
        $table->string(User::email)->unique();
        $table->integer(User::votes);
        $table->timestamps();
    });


    DB::table(User::table_name)->insert([
        [
            User::email => 'user1@gmail.com',
            User::votes => 0,
        ],
        [
            User::email => 'user2@gmail.com',
            User::votes => 0,
        ],
        [
            User::email => 'user3@gmail.com',
            User::votes => 0,
        ],
    ]);