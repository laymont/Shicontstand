<?php

namespace Laymont\Shicontstand\Models;

use Illuminate\Database\Eloquent\Model;

class SizeType extends Model
{
    protected $primaryKey = 'code';

    protected $keyType = 'string';

    protected $guarded = ['code'];

    public function getTable()
    {
        return config('shicontstand.tables.size_types');
    }

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

    public function typeGroup(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(TypeGroup::class, 'type_group_code', 'code');
    }
}
