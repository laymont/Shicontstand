<?php

namespace Laymont\Shicontstand\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function all(): \Illuminate\Database\Eloquent\Collection;

    public function find(int|string $id): ?Model;

    public function findOrFail(int|string $id): Model;

    public function paginate(int $perPage = 15): LengthAwarePaginator;

    public function create(array $attributes): Model;

    public function update(int|string $id, array $attributes): bool;

    public function delete(int|string $id): bool;

    public function query(): \Illuminate\Database\Eloquent\Builder;
}