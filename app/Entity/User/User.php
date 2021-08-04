<?php

namespace App\Entity\User;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    public const STATUS_WAIT = 'wait';
    public const STATUS_ACTIVE = 'active';

    public const ROLE_USER = 'user';
    public const ROLE_DOCTOR = 'doctor';
    public const ROLE_ADMIN = 'admin';

    public static function rolesList(): array
    {
        return [
            self::ROLE_ADMIN => 'Admin',
            self::ROLE_DOCTOR => 'Doctor',
            self::ROLE_USER => 'User',
        ];
    }

    protected $fillable = [
        'login', 'email', 'first_name', 'last_name',
        'middle_name', 'phone', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isWait(): bool
    {
        return $this->status === self::STATUS_WAIT;
    }

    public function isDoctor(): bool
    {
        return $this->role === self::ROLE_DOCTOR;
    }

    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }

    public function changeRole($role): void
    {
        if (!array_key_exists($role, self::rolesList())) {
            throw new \InvalidArgumentException('Undefined role "' . $role . '"');
        }
        if ($this->role === $role) {
            throw new \DomainException('Role is already assigned.');
        }

        $this->update(['role' => $role]);
    }
}
