<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PvpGame;
use Faker\Generator as Faker;

$factory->define(PvpGame::class, function (Faker $faker) {
    return [
        'player_one_id' => User::all()->random(),
        'player_two_id' => User::all()->random(),
        'points_player_one' => $faker->randomNumber(3),
        'points_player_two' => $faker->randomNumber(3),
        'time_player_one' => $faker->time('s', '00:01:30'),
        'time_player_two' => $faker->time('s', '00:01:30')
    ];
});
