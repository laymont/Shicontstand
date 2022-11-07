<?php

namespace Laymont\Shicontstand\Models;

class SizeType extends \Illuminate\Database\Eloquent\Model
{
    protected $guarded = [
        'id',
        'type_group_code',
        'code',
        'description',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'type_group_code' => 'string',
        'code' => 'string',
        'description' => 'string',
    ];
}
