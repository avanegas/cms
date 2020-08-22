<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Profile;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'bio' => $faker->text,
        'phone' => $faker->phoneNumber,
        'twitter_username' => $faker->userName,
        'github_username' => $faker->userName,
        'avatar_status' => '0',
        'status' => 'PRIVATE',
        'activated' => '0',
    ];
});
