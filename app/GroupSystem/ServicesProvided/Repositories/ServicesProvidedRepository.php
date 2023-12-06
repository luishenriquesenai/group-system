<?php

namespace App\GroupSystem\ServicesProvided\Repositories;

use App\GroupSystem\Abstracts\Repositories\AbstractRepository;
use App\Models\ServicesProvided;

class ServicesProvidedRepository extends AbstractRepository
{
    public function __construct(ServicesProvided $model)
    {
        $this->model = $model;
    }
}
