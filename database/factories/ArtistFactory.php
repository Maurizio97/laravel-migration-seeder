<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'surname' => $faker -> name(),
        'age' => $faker -> numberBetween(0, 100),
        'date_of_birth' => $faker -> date(),
        'stage_name' => $faker -> name(),
        'record_company' => $faker -> name()
    ];
});
