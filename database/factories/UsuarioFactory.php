<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;
use App\Models\Usuario;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'usuario'=>$faker->firstName,
        'password'=> $faker->password,
        'nombre'=> $faker->name
    ];
});
