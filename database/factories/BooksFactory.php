<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Book::class, function (Faker $faker) {
    return [
        'book_title' => $faker->name,
        'author' => $faker->name,
        'publication_date' => new DateTime,
        'number_page' => $faker->randomDigit,
        'category_id' => $faker->randomDigit,
        'image_id' => $faker->randomDigit,
    ];
});
