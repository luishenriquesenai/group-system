<?php

namespace App\GroupSystem\Customer\Repositories;

use App\GroupSystem\Abstracts\Repositories\AbstractRepository;
use App\Models\Customer;

class CustomerRepository extends AbstractRepository
{
    public function __construct(Customer $model)
    {
        $this->model = $model;
    }
}
