<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->catchPhrase,
        'event_date' => $faker->catchPhrase,
        'registration_link' => $faker->catchPhrase,
        'img' => $faker->catchPhrase,
    ];
});
