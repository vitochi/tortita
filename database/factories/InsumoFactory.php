<?php

use Faker\Generator as Faker;
use App\Insumo;

$factory->define(Insumo::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->randomElement(['Pasta Bagina', 'Manteca', 'Harina', 'Fecula', 'Azucar', 'Chocolate', 'Pulpa de Frutilla', 'Velas', 'Vainilla']),
        'slug' => $faker->slug(),
        'descripcion' => $faker->sentence(3),        
        'medida' => $faker->randomElement(['cm3', 'miligramos', 'Lts.', 'gramos', 'Kg.']),
        'cantidad' => $faker->randomNumber(4),
        'price' => $faker->randomFloat(2, 1, 9999),
    ];
});
