<?php

namespace Laymont\Shicontstand\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Laymont\Shicontstand\Models\LengthCode;
use Laymont\Shicontstand\Models\SizeCode;
use Laymont\Shicontstand\Models\SizeType;
use Laymont\Shicontstand\Models\TypeCode;
use Laymont\Shicontstand\Models\TypeGroup;

class ShicontstandController extends Controller
{
    public function getTypeGroup(): Collection
    {
        return TypeGroup::all();
    }

    public function getSizeType(): Collection
    {
        return SizeType::all();
    }

    public function getLengthCode(): Collection
    {
        return LengthCode::all();
    }

    public function getSizeCode(): Collection
    {
        return SizeCode::all();
    }

    public function getTypeCode(): Collection
    {
        return TypeCode::all();
    }
}
