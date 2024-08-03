<?php

namespace App\Repositories;

use App\Entities\Entity;
use App\Interfaces\RepositoryInterface;

abstract class Repository implements RepositoryInterface
{
    public function __construct(
        protected Entity $entity
    )
    {}

    public function all(array $criteria = []): object
    {
        return $this->entity->where($criteria)->get();
    }

    public function create(array $attributes): object
    {
        return $this->entity->create($attributes);
    }

    public function find($id): ?object
    {
        return $this->entity->find($id);
    }

    public function findByCriteria(array $criteria): ?object
    {
        return $this->entity->where($criteria)->first();
    }

    public function findWith($id, array $relations): ?object
    {
        return $this->entity->with($relations)->find($id);
    }

    public function update($id, array $attributes): void
    {
        $this->entity->findOrFail($id)->update($attributes);
    }

    public function delete($id): void
    {
        $this->entity->findOrFail($id)->delete();
    }

    public function count(): int
    {
        return $this->entity->count();
    }

    public function builder(): object
    {
        return $this->entity->query();
    }
}
