<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Group;

$factory->define(Group::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
    ];
});
