<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Portfolio;
use Faker\Generator as Faker;

$factory->define(Portfolio::class, function (Faker $faker) {
    return [
        'img_name' => $faker->name,
        'img_path' => $faker->imageUrl(),
        'img_desc' => $faker->sentence($nbWords = 4, $variableNbWords = true)
    ];
});