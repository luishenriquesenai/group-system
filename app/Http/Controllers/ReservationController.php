<?php

namespace App\Http\Controllers;

use App\GroupSystem\Reservation\Services\ReservationService;

class ReservationController extends AbstractController
{
    public function __construct(ReservationService $service)
    {
        $this->service = $service;
    }
}
