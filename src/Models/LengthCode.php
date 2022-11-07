<?php

namespace Laymont\Shicontstand\Models;

use Illuminate\Database\Eloquent\Model;

class LengthCode extends Model
{
    protected $guarded = [];

    public function getTable()
    {
        return config('shicontstand.tables.length_codes');
    }

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
