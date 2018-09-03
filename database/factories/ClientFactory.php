<?php

use Faker\Generator as Faker;
use App\Client;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'apellido' => $faker->lastName,
        'email' => $faker->email,
        'telefono' => $faker->phoneNumber,
        'direccion' => $faker->address,
        'barrio' => $faker->citySuffix,

    ];
});
