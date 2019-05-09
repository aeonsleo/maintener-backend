<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Maintenance;
use Faker\Generator as Faker;

$factory->define(Maintenance::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
        'user_id' => App\User::all()->random(),
        'frequency' => $faker->word,
        'description' => $faker->paragraph()
    ];
});
