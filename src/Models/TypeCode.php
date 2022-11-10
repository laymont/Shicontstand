<?php

namespace Laymont\Shicontstand\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(string $code)
 */
class TypeCode extends Model
{
    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $guarded = ['id', 'code', 'description'];

    public function getTable()
    {
        return config('shicontstand.tables.type_codes');
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

    public function scopeCode($query, $code)
    {
        return $query->find(strtoupper($code));
    }
}
