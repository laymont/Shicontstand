<?php

namespace Laymont\Shicontstand\Contracts;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use Laymont\Shicontstand\Models\TypeGroup;

interface TypeGroupInterface
{
    public function all(): Collection;

    public function find(string $code): ?TypeGroup;

    public function findOrFail(string $code): TypeGroup;

    public function paginate(int $perPage = 15): LengthAwarePaginator;

    public function create(array $attributes): TypeGroup;

    public function update(string $code, array $attributes): bool;

    public function delete(string $code): bool;
}