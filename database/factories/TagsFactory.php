<?php

use Faker\Generator as Faker;

$factory->define(TagsTableSeeder::class, function (Faker $faker) {
    return [
        'label' => $faker->domainName,
    ];
});
