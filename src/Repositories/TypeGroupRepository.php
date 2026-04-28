<?php

namespace Laymont\Shicontstand\Repositories;

use Laymont\Shicontstand\Models\TypeGroup;

class TypeGroupRepository extends EloquentRepository
{
    public function __construct(TypeGroup $model)
    {
        parent::__construct($model);
    }
}