<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Worker;
use Faker\Generator as Faker;

$factory->define(Worker::class, function (Faker $faker) {
    $dateTime = $faker->dateTimeBetween($startDate = '-20 years', $endDate = 'now', $timezone = null);
    return [
        'name' => $faker->name,
        'salary' => $faker->numberBetween($min = 1000, $max = 9000),
        'created_at' => $dateTime,
        'updated_at' => $dateTime,
    ];
});
