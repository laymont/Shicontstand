<?php

namespace Laymont\Shicontstand\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Laymont\Shicontstand\Contracts\RepositoryInterface;

abstract class EloquentRepository implements RepositoryInterface
{
    public function __construct(
        protected Model $model
    ) {}

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function find(int|string $id): ?Model
    {
        return $this->model->find($id);
    }

    public function findOrFail(int|string $id): Model
    {
        return $this->model->findOrFail($id);
    }

    public function paginate(int $perPage = 15): LengthAwarePaginator
    {
        return $this->model->paginate($perPage);
    }

    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    public function update(int|string $id, array $attributes): bool
    {
        return $this->findOrFail($id)->update($attributes);
    }

    public function delete(int|string $id): bool
    {
        return $this->findOrFail($id)->delete();
    }

    public function query(): Builder
    {
        return $this->model->newQuery();
    }
}
