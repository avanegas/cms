<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Tag;

$factory->define(Tag::class, function (Faker $faker) {

	$title = $faker->unique()->word(1);

    return [
        'name' => $title,
        'slug' => Str::slug($title),
    ];
});
