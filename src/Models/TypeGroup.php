<?php

namespace Laymont\Shicontstand\Models;

use Illuminate\Database\Eloquent\Model;

class TypeGroup extends Model
{
    protected $primaryKey = 'code';
    protected $keyType = 'string';
    protected $guarded = ['code'];
    protected $fillable = ['description'];

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

    public function scopeCode($query, $code)
    {
        return $query->find($code);
    }
}
