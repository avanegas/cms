<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Category;

$factory->define(Category::class, function (Faker $faker)
{
    $name = $faker->sentence;
    $slug = Str::slug($name);
    return [
        'name' => $name,
        'slug' => $slug,
    ];
});
