<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review ;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    $users = App\User::all()->pluck('id')->toArray();
    $product = App\Product::all()->pluck('id')->toArray();

    return [
        'comment' => $faker->words(5, true),
        'user_id' => $faker->randomElement($users),
        'product_id' => $faker->randomElement($product),
    ];
});
