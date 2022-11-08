<?php

namespace Laymont\Shicontstand\Http\Controllers;

use Laymont\Shicontstand\Models\TypeCode;
use Laymont\Shicontstand\Models\TypeGroup;
use Laymont\Shicontstand\Models\SizeType;
use Laymont\Shicontstand\Models\LengthCode;
use Laymont\Shicontstand\Models\SizeCode;

class ShicontstandController extends Controller
{
    public function getIsoTypeGroup(): \Illuminate\Database\Eloquent\Collection
    {
        return TypeGroup::all();
    }

    public function getIsoSizeType(): \Illuminate\Database\Eloquent\Collection
    {
        return SizeType::all();
    }

    public function getIsoLengthCode(): \Illuminate\Database\Eloquent\Collection
    {
        return LengthCode::all();
    }

    public function getIsoSizeCode(): \Illuminate\Database\Eloquent\Collection
    {
        return SizeCode::all();
    }

    public function getIsoTypeCode(): \Illuminate\Database\Eloquent\Collection
    {
        return TypeCode::all();
    }
}
