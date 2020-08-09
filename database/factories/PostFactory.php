<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'user_id' 		=> rand(1,10),
        'category_id' 	=> rand(1,10),
        'name' 			=> $title,
        'slug' 			=> Str::slug($title),
        'excerpt' 		=> $faker->text(200),
        'body' 			=> $faker->text(400),
        'status'        => $faker->randomElement(['DRAFT', 'PUBLISHED']),
    ];
});
