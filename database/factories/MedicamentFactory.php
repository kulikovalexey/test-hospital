<?php

use App\Entity\Medicament\Medicament;
use Faker\Generator as Faker;

$factory->define(Medicament::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->text(15),
        'description' => 'Принимать ' . rand(1, 4) . ' таблетки ' . rand(2, 5) . ' раз в день'
    ];
});
