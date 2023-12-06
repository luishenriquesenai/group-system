<?php

namespace App\GroupSystem\ServicesProvided\Services;

use App\GroupSystem\Abstracts\Services\AbstractService;
use App\GroupSystem\ServicesProvided\Repositories\ServicesProvidedRepository;

class ServicesProvidedService extends AbstractService
{
    public function __construct(ServicesProvidedRepository $repository)
    {
        $this->repository = $repository;
    }
}
