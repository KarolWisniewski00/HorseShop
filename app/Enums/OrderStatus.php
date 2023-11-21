<?php

namespace App\Enums;

class OrderStatus
{
    const PENDING = 'Oczekujący na płatność';

    const TYPES = [
        self::PENDING,
    ];
}