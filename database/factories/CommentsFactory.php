<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->text,
        'created_at' => $faker->dateTime,
        'publish_at' => $faker->dateTime,
        'status' => $faker->jobTitle,
    ];
});
