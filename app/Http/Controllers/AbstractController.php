<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class AbstractController extends Controller
{
    protected $requestValidate;

    protected $service;

    public function index(Request $request)
    {
        return $this->service->index($request->toArray());
    }

    public function store(Request $request)
    {
        $this->service->store($request->toArray());

        return response()->json(['success' => true], 200);
    }

    public function show(int $id, Request $request)
    {
        return $this->service->show($id, $request->toArray());
    }

    public function update(int $id, Request $request)
    {
        $this->service->update($id, $request->toArray());

        return response()->json(['success' => true], 200);
    }

    public function destroy(int $id)
    {
        $this->service->destroy($id);

        return response()->json(['success' => true], 200);
    }
}
