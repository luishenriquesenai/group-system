<?php

namespace App\Http\Controllers;

use App\GroupSystem\Customer\Services\CustomerService;
use App\Http\Requests\CustomerRequest;

class CustomerController extends AbstractController
{
    protected $requestValidate = CustomerRequest::class;

    public function __construct(CustomerService $service)
    {
        $this->service = $service;
    }
}
