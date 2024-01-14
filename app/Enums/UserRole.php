<?php

namespace App\Enums;

class UserRole
{
    const USER = 'USER';
    const ADMIN = 'ADMIN';

    const TYPES = [
        self::USER,
        self::ADMIN,
    ];
}