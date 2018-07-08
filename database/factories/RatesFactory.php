<?php

use Faker\Generator as Faker;

use App\Models\Rate;

$factory->define(Rate::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
		'max_payment' => $faker->randomFloat(2, 0, 3000),
		'priority' => $faker->numberBetween(0, 100),
		'max_mileage' => $faker->numberBetween(0, 100),
		'max_mileage_price' => $faker->numberBetween(0, 30),
    ];
});
