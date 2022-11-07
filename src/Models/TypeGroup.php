<?php

namespace Laymont\Shicontstand\Models;

use Illuminate\Database\Eloquent\Model;

class TypeGroup extends Model
{
    protected $guarded = [];

    public function getTable()
    {
        return config('shicontstand.tables.type_groups');
    }

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'description' => 'string',
    ];
}
