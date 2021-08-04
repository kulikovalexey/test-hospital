<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entity\User\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

    return [
        'login' => $faker->unique()->username,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'first_name' =>$faker->firstName,
        'last_name' => $faker->lastName,
        'patronymic' => '',
        'status' => $faker->randomElement(['wait', 'active']),
        'phone' => $faker->phoneNumber,
        'role' => $faker->randomElement(['user', 'doctor', 'admin']),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
