<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Location;

$factory->define(Location::class, function (Faker $faker) {
    return [
        'country' => $faker->country,
    ];
});
