<?php

namespace Laymont\Shicontstand\Models;

use Illuminate\Database\Eloquent\Model;

class SizeCode extends Model
{
    protected $guarded = [];

    public function getTable()
    {
        return config('shicontstand.tables.size_codes');
    }

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
