<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        'book_id' => $faker->randomDigit,
        'user_id' => $faker->randomDigit,
        'content_review' => $faker->name,
    ];
});
