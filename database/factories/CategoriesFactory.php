<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Categories::class, function (Faker $faker) {
    return [
        'cate_name' => $faker->name,
        'parent_id' => $faker->randomDigit,
    ];
});
