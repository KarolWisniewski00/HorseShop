<?php

namespace App\Enums;

class OrderStatus
{
    const PENDING = 'Oczekujący na płatność';
    const PROGRESS = 'W trakcie realizacji';
    const DONE = 'Zrealizowane';
    const CANCEL = 'Anulowano';
    const PAID = 'Opłacone';

    const TYPES = [
        self::PENDING,
        self::PROGRESS,
        self::DONE,
        self::CANCEL,
        self::PAID,
    ];
}