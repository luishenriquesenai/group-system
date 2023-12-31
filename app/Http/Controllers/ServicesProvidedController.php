<?php

namespace App\Http\Controllers;

use App\GroupSystem\ServicesProvided\Services\ServicesProvidedService;
use Illuminate\Http\Request;

class ServicesProvidedController extends AbstractController
{
    public function __construct(ServicesProvidedService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $servicesProvided = $this->service->index($request->toArray());

        return view('servicesProvided.index', [
            'servicesProvideds' => $servicesProvided,
        ]);
    }

    public function store(Request $request)
    {
        $this->service->store($request->toArray());

        return redirect()->route('dashboard');
    }

    public function destroy(int $id)
    {
        $this->service->destroy($id);
        return redirect()->route('dashboard');
    }
}
