<?php

namespace App\GroupSystem\Reservation\Services;

use App\GroupSystem\Abstracts\Services\AbstractService;
use App\GroupSystem\Reservation\Repositories\ReservationRepository;

class ReservationService extends AbstractService
{
    public function __construct(ReservationRepository $repository)
    {
        $this->repository = $repository;
    }
}
