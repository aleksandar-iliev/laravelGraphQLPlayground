<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Favorite;
use Faker\Generator as Faker;

$factory->define(Favorite::class, function (Faker $faker) {
    return [
        'user_id' => \App\Models\User::inRandomOrder()->first()->id,
        'game_id' => \App\Models\Game::inRandomOrder()->first()->id
    ];
});
