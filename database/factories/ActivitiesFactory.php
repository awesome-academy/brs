<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Activities::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomDigit,
        'body_comment' => $faker->name,
        'commentable_id' => $faker->randomDigit,
        'commentable_type' => $faker->name,
        'likeable_id' => $faker->randomDigit,
        'likeable_type' => $faker->name,
        'ratingable_id' => $faker->randomDigit,
        'ratingable_type' => $faker->name,
        'created_at' => new DateTime,
        'updated_at' => new DateTime,
    ];
});
