<?php

namespace Laymont\Shicontstand\Http\Controllers;

use Laymont\Shicontstand\Models\LengthCode;
use Laymont\Shicontstand\Models\SizeCode;
use Laymont\Shicontstand\Models\SizeType;
use Laymont\Shicontstand\Models\TypeCode;
use Laymont\Shicontstand\Models\TypeGroup;

class ShicontstandController extends Controller
{
    public function getTypeGroup(): \Illuminate\Database\Eloquent\Collection
    {
        return TypeGroup::all();
    }

    public function getSizeType(): \Illuminate\Database\Eloquent\Collection
    {
        return SizeType::all();
    }

    public function getLengthCode(): \Illuminate\Database\Eloquent\Collection
    {
        return LengthCode::all();
    }

    public function getSizeCode(): \Illuminate\Database\Eloquent\Collection
    {
        return SizeCode::all();
    }

    public function getTypeCode(): \Illuminate\Database\Eloquent\Collection
    {
        return TypeCode::all();
    }
}
