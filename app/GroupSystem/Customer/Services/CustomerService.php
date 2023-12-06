<?php

namespace App\GroupSystem\Customer\Services;

use App\GroupSystem\Abstracts\Services\AbstractService;
use App\GroupSystem\Customer\Repositories\CustomerRepository;

class CustomerService extends AbstractService
{
    public function __construct(CustomerRepository $repository)
    {
        $this->repository = $repository;
    }
}
