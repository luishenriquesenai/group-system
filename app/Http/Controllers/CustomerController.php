<?php

namespace App\Http\Controllers;

use App\GroupSystem\Customer\Services\CustomerService;
use App\Http\Requests\CustomerRequest;
use Illuminate\Http\Request;

class CustomerController extends AbstractController
{
    protected $requestValidate = CustomerRequest::class;

    public function __construct(CustomerService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $customers = $this->service->index($request->toArray());
        dd($customers);
        return view('customers.index', [
            'customers' => $customers,
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
