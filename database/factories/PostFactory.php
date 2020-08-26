<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $name = $faker->words(3, true);
    return [
        'title' => $name,
        'slug' => Str::slug($name, '-'),
        'description' => $faker->words(10, true),
        'img' => $faker->randomElement([ 'https://loremflickr.com/320/240/paris,girl/all', null ])
    ];
});
