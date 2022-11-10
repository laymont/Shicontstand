<?php

namespace Laymont\Shicontstand;

use Illuminate\Http\JsonResponse;
use Laymont\Shicontstand\Http\Resources\LengthCodeResource;
use Laymont\Shicontstand\Http\Resources\SizeCodeResource;
use Laymont\Shicontstand\Http\Resources\SizeTypeResource;
use Laymont\Shicontstand\Http\Resources\TypeCodeResource;
use Laymont\Shicontstand\Http\Resources\TypeGroupResource;
use Laymont\Shicontstand\Models\LengthCode;
use Laymont\Shicontstand\Models\SizeCode;
use Laymont\Shicontstand\Models\SizeType;
use Laymont\Shicontstand\Models\TypeCode;
use Laymont\Shicontstand\Models\TypeGroup;

class Shicontstand
{
    protected JsonResponse $typeGroups;

    protected JsonResponse $typeGroup;

    protected JsonResponse $sizeTypes;

    protected JsonResponse $sizeType;

    protected JsonResponse $lengthCodes;

    protected JsonResponse $lengthCode;

    protected JsonResponse $sizeCodes;

    protected JsonResponse $sizeCode;

    protected JsonResponse $typeCodes;

    protected JsonResponse $typeCode;

    public function getTypeGroups(): JsonResponse
    {
        return response()->json(TypeGroupResource::collection(TypeGroup::all()), 200);
    }

    public function getTypeGroup(string $code): JsonResponse
    {
        $typeGroup = TypeGroup::find($code);

        return response()->json(new TypeGroupResource($typeGroup), 200);
    }

    public function getSizeTypes(): JsonResponse
    {
        return response()->json(SizeTypeResource::collection(SizeType::all()), 200);
    }

    public function getSizeType(string $code): JsonResponse
    {
        $sizeType = SizeType::find($code);

        return response()->json(new SizeTypeResource($sizeType), 200);
    }

    public function getLengthCodes(): JsonResponse
    {
        return response()->json(LengthCodeResource::collection(LengthCode::all()), 200);
    }

    public function getLengthCode(string $code): JsonResponse
    {
        $lengthCode = LengthCode::find($code);

        return response()->json(new LengthCodeResource($lengthCode), 200);
    }

    public function getSizeCodes(): JsonResponse
    {
        return response()->json(SizeCodeResource::collection(SizeCode::all()), 200);
    }

    public function getSizeCode(string $code): JsonResponse
    {
        $sizeCode = SizeCode::find($code);

        return response()->json(new SizeCodeResource($sizeCode), 200);
    }

    public function getTypeCodes(): JsonResponse
    {
        return response()->json(TypeCodeResource::collection(TypeCode::all()), 200);
    }

    public function getTypeCode(string $code): JsonResponse
    {
        $typeCode = TypeCode::find($code);

        return response()->json(new TypeCodeResource($typeCode), 200);
    }
}
