<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'genres' => $faker->word(),
        'publication_date' => $faker->date(),
        'lyric' => $faker -> text(300),
        'record_company' => $faker -> name(),
        'duration' => $faker -> numberBetween(30, 600)
    ];
});
