<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'subject' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'message' => $faker->text($maxNbChars = 200) 
    ];
});
