<?php

use App\Insumo;
use Faker\Generator as Faker;

$factory->define(Insumo::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->randomElement(['Pasta Bagina', 'Manteca', 'Harina', 'Fecula', 'Azucar', 'Chocolate', 'Pulpa de Frutilla', 'Velas', 'Vainilla']),
        'descripcion' => $faker->sentence(3),
        'proveedor' => $faker->company,
        'medida' => $faker->randomElement(['cm3', 'miligramos', 'Lts.', 'gramos', 'Kg.']),
        'cantidad' => $faker->randomNumber(4),
        'price' => $faker->randomFloat(2, 1, 9999),

    ];
});
