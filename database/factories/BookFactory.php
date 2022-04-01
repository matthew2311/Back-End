<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'nama' => $faker->name(),
        'penulis' => $faker->name(),
        'harga' => $faker->randomNumber(5),
        'stock' => $faker->randomDigit,
        'image' => 'null',
        'user_id' => '2',
        // 'image' => $faker->image('public/storage/images',640,480, 'cats'),
    ];
});
