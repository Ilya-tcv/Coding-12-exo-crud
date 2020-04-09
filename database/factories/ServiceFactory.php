<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence($nbWords = 2, $variableNbWords = true),
        'desc'=>$faker->text($maxNbChars = 120)
    ];
});
