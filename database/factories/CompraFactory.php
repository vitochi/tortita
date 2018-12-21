<?php

use Faker\Generator as Faker;

$factory->define(App\Compra::class, function (Faker $faker) {
    return [

    	'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
    	'slug' => $faker->slug(),
    	'proveedor' => $faker->randomElement(['La Reposterita', 'La Tortita loca', 'Adriana' ]),
    	'total' => $faker->randomFloat(2, 1, 9999),

    ];
});
