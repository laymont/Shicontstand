<?php

namespace Laymont\Shicontstand;

use Illuminate\Database\Eloquent\Collection;
use Laymont\Shicontstand\Models\TypeGroup;

class Shicontstand
{
    public function typeGroups(): Collection
    {
        return TypeGroup::all();
    }
}
