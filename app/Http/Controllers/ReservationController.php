<?php

namespace App\Http\Controllers;

use App\GroupSystem\Reservation\Services\ReservationService;
use Illuminate\Http\Request;

class ReservationController extends AbstractController
{
    public function __construct(ReservationService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $reservations = $this->service->index($request->toArray());

        return view('reservation.index', [
            'reservations' => $reservations,
        ]);
    }
}
