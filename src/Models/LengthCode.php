<?php

namespace Laymont\Shicontstand\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(string $code)
 */
class LengthCode extends Model
{
    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $guarded = ['id', 'code', 'container_length'];

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

    public function scopeCode($query, $code)
    {
        return $query->find(strtoupper($code));
    }
}
