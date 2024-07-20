<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class Repository implements RepositoryInterface
{
    public function __construct(
        protected Model $model
    )
    {}

    public function all(array $criteria = []): object
    {
        return $this->model->where($criteria)->get();
    }

    public function create(array $attributes): object
    {
        return $this->model->create($attributes);
    }

    public function find($id): ?object
    {
        return $this->model->find($id);
    }

    public function findByCriteria(array $criteria): ?object
    {
        return $this->model->where($criteria)->first();
    }

    public function findWith($id, array $relations): ?object
    {
        return $this->model->with($relations)->find($id);
    }

    public function update($id, array $attributes): void
    {
        $this->model->findOrFail($id)->update($attributes);
    }

    public function delete($id): void
    {
        $this->model->findOrFail($id)->delete();
    }

    public function count(): int
    {
        return $this->model->count();
    }
}
