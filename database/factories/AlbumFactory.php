<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'sold' => $faker -> numberBetween(),
        'record_company' => $faker -> name(),
        'genres' => $faker -> word(),
        'publication_date' => $faker -> date(),
        'author' => $faker -> name()
    ];
});
