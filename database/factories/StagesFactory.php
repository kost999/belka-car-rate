<?php

use Faker\Generator as Faker;

use App\Models\Stage;

$factory->define(Stage::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
		'price' => $faker->randomFloat(2, 0, 30),
		'unit' => $faker->boolean ? 'minutes' : 'kilometers',
		'free_initial_minutes' => $faker->numberBetween(0, 10),
		'free_time_start' => $faker->time(),
		'free_time_end' => $faker->time(),
		'free_initial_mileage' => 0,
    ];
});
