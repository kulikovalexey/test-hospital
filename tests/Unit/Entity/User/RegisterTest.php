<?php

namespace Tests\Unit\Entity\User;

use Tests\TestCase;
use App\Entity\User\User;

class RegisterTest extends TestCase
{
    public function testRequest(): void
    {
        $user = User::register(
            $email = 'email',
            $password = 'password',
            $first_name = 'first_name',
            $middle_name = 'middle_name',
            $last_name = 'last_name'
        );

        self::assertNotEmpty($user);

        self::assertEquals($first_name, $user->first_name);
        self::assertEquals($middle_name, $user->middle_name);
        self::assertEquals($last_name, $user->last_name);
        self::assertEquals($email, $user->email);

        self::assertNotEmpty($user->password);
        self::assertNotEquals($password, $user->password);


    }

}
