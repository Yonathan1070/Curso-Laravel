<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Libro;

$factory->define(Libro::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->title,
        'isbn'=> $faker->title,
        'autor'=> $faker->name,
        'cantidad'=> $faker->numberBetween(1,10),
        'editorial'=> $faker->name,
        'foto'=> $faker->imageUrl($width = 640, $height = 480)
    ];
});
