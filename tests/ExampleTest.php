<?php

namespace Laymont\Shicontstand\Tests;

use Laymont\Shicontstand\Models\TypeGroup;
use Laymont\Shicontstand\Repositories\TypeGroupRepository;

it('can instantiate TypeGroupRepository', function () {
    $repository = new TypeGroupRepository(new TypeGroup());
    expect($repository)->toBeInstanceOf(TypeGroupRepository::class);
});

it('TypeGroupRepository has model', function () {
    $model = new TypeGroup();
    $repository = new TypeGroupRepository($model);
    
    expect($repository->all())->toBeInstanceOf(\Illuminate\Database\Eloquent\Collection::class);
});

it('EloquentRepository can query', function () {
    $model = new TypeGroup();
    $repository = new TypeGroupRepository($model);
    
    expect($repository->query())->toBeInstanceOf(\Illuminate\Database\Eloquent\Builder::class);
});

it('TypeGroup model can get table from config', function () {
    $model = new TypeGroup();
    
    expect($model->getTable())->toBeString();
});

it('TypeGroup has relationship with SizeType', function () {
    $model = new TypeGroup();
    
    expect($model->sizeTypes())->toBeInstanceOf(\Illuminate\Database\Eloquent\Relations\HasMany::class);
});