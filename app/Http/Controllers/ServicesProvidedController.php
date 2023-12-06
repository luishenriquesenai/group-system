<?php

namespace App\Http\Controllers;

use App\GroupSystem\ServicesProvided\Services\ServicesProvidedService;
use App\Http\Requests\ServicesProvidedRequest;

class ServicesProvidedController extends AbstractController
{
    protected $requestValidate = ServicesProvidedRequest::class;

    public function __construct(ServicesProvidedService $service)
    {
        $this->service = $service;
    }
}
