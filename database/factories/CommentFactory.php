<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->text,
        'user_id' => rand(1,8),
    ];
});
