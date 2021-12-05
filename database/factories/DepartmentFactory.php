<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
    $dateTime = $faker->dateTimeBetween($startDate = '-10 years', $endDate = 'now', $timezone = null);
    return [
        'name' => $faker->word,
        'created_at' => $dateTime,
        'updated_at' => $dateTime,
    ];
});
