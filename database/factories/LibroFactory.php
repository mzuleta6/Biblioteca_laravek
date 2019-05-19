<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Libro;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        'titulo' => $faker->word,
        'isbn' => $faker->word,
        'autor' => $faker->word,
        'cantidad' => $faker->randomDigit,
        'editorial' => $faker->word,
        'foto' => $faker->word
    ];
});
