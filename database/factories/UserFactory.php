<?php

use App\Entity\User\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {

    return [
        'login' => $faker->unique()->username,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'first_name' =>$faker->firstName,
        'middle_name' => '',
        'last_name' => $faker->lastName,
        'status' => $faker->randomElement([User::STATUS_WAIT, User::STATUS_ACTIVE]),
        'phone' => $faker->phoneNumber,
        'role' => $faker->randomElement([User::ROLE_USER, User::ROLE_DOCTOR, User::ROLE_ADMIN]),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});
