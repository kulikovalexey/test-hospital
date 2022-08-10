<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Entity\User\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'admin@test.test',
            'status' => User::STATUS_ACTIVE,
            'role' => User::ROLE_ADMIN,
        ]);

        User::factory()->create([
            'email' => 'doctor@test.test',
            'status' => User::STATUS_ACTIVE,
            'role' => User::ROLE_DOCTOR,
        ]);

        User::factory()->create([
            'email' => 'user@test.test',
            'status' => User::STATUS_ACTIVE,
            'role' => User::ROLE_USER,
        ]);

        User::factory()->count(100)->create();
    }
}
