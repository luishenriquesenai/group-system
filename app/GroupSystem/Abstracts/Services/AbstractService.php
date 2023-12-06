<?php

namespace App\GroupSystem\Abstracts\Services;

abstract class AbstractService
{
    protected $repository;

    public function index(array $params)
    {
        return $this->repository->index($params);
    }

    public function store(array $params)
    {
        return $this->repository->create($params);
    }

    public function show(int $id, array $params)
    {
        return $this->repository->show($id, $params);
    }

    public function update(int $id, array $params)
    {
        return $this->repository->update($id, $params);
    }

    public function destroy(int $id)
    {
        return $this->repository->destroy($id);
    }
}
