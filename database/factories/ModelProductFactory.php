<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        'name'=> $faker->word,
        'detail' =>$faker->paragraph,
        'price' =>$faker->numberbetween(100,1000),
        'stock' =>$faker->randomdigit,
        'discount' => $faker->numberBetween(2,30)
    ];
});
