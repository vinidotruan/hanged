<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CasualGame;
use Faker\Generator as Faker;
use App\User;

$factory->define(CasualGame::class, function (Faker $faker) {
    return [
        'player_id' => User::all()->random(),
        'points' => $faker->randomNumber(3)
    ];
});
