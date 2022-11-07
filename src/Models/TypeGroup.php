<?php

namespace Laymont\Shicontstand\Models;

class TypeGroup extends \Illuminate\Database\Eloquent\Model
{
    protected $guarded = [
        'id',
        'code',
        'description'
    ];

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
