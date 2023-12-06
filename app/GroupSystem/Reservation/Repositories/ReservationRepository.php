<?php

namespace App\GroupSystem\Reservation\Repositories;

use App\GroupSystem\Abstracts\Repositories\AbstractRepository;
use App\Models\Reservation;

class ReservationRepository extends AbstractRepository
{
    public function __construct(Reservation $model)
    {
        $this->model = $model;
    }
}
