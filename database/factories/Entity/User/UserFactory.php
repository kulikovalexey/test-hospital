<?php

namespace Database\Factories\Entity\User;

use App\Entity\User\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'first_name' => $this->faker->firstName,
            'middle_name' => '',
            'last_name' => $this->faker->lastName,
            'status' => $this->faker->randomElement([User::STATUS_WAIT, User::STATUS_ACTIVE]),
            'role' => $this->faker->randomElement([User::ROLE_USER, User::ROLE_DOCTOR, User::ROLE_ADMIN]),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
