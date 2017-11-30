<?php

use Faker\Generator as Faker;

$factory->define(App\Articles::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->text,
        'status' => rand(1.4),
    ];
});
