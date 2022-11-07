<?php

namespace Laymont\Shicontstand\Models;

class SizeCode extends \Illuminate\Database\Eloquent\Model
{
    protected $guarded = [
        'id',
        'code',
        'container_height',
        'width',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'container_height' => 'string',
        'width' => 'string',
    ];
}
