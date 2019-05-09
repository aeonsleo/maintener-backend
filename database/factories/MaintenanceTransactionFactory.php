<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\MaintenanceTransaction;
use Faker\Generator as Faker;
use App\Maintenance;

$factory->define(MaintenanceTransaction::class, function (Faker $faker) {
    return [
        'maintenance_id' => Maintenance::all()->random(),
        'scheduled_date' => $faker->date(),
        'transaction_date' => $faker->date(),
        'amount' => $faker->randomFloat(2, 200, 10000)
    ];
});
