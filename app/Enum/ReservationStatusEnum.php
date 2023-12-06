<?php

namespace App\Enum;

enum ReservationStatusEnum: int
{
    case CONFIRMED = 1;
    case WAITING_CONFIRMATION = 2;
    case CANCELED = 3;
}
