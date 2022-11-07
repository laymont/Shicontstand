<?php

namespace Laymont\Shicontstand\Models;

class LengthCode extends \Illuminate\Database\Eloquent\Model
{
    protected $guarded = [
        'id',
        'code',
        'container_length',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'container_length' => 'string',
    ];
}
