<?php

namespace App\Interfaces;

interface RepositoryInterface
{
    public function all(array $criteria = []): object;

    public function create(array $attributes): object;

    public function find($id): ?object;

    public function findByCriteria(array $criteria): ?object;

    public function findWith($id, array $relations): ?object;

    public function update($id, array $attributes): void;

    public function delete($id): void;

    public function count(): int;

    public function builder(): object;
}
