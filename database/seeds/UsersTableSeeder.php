<?php

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
        factory(User::class)->create([
            'email' => 'admin@test.test',
            'status' => User::STATUS_ACTIVE,
            'role' => User::ROLE_ADMIN,
        ]);

        factory(User::class)->create([
            'email' => 'doctor@test.test',
            'status' => User::STATUS_ACTIVE,
            'role' => User::ROLE_DOCTOR,
        ]);

        factory(User::class)->create([
            'email' => 'user@test.test',
            'status' => User::STATUS_ACTIVE,
            'role' => User::ROLE_USER,
        ]);

        factory(User::class, 100)->create();
    }
}
