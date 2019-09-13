<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'value' => $faker->randomFloat(2, 1, 200),
        'quantity' => rand(1, 30),
    ];
});
