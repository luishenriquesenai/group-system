<?php

namespace App\GroupSystem\Abstracts\Repositories;

abstract class AbstractRepository
{
    protected $model;

    public function index(array $params)
    {
        return $this->model->all();
    }

    public function create(array $params)
    {
        $this->model->fill($params);

        return $this->model->save();
    }

    public function show(int $id, array $params)
    {
        return $this->model->find($id);
    }

    public function update(int $id, $params)
    {
        $entity = $this->model->find($id);

        return $entity->fill($params)->update();
    }

    public function destroy(int $id)
    {
        return $this->model->destroy($id);
    }
}
