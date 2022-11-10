<?php

namespace Laymont\Shicontstand;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
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
    protected AnonymousResourceCollection $typeGroups;

    protected TypeGroupResource $typeGroup;

    protected AnonymousResourceCollection $sizeTypes;

    protected SizeTypeResource $sizeType;

    protected AnonymousResourceCollection $lengthCodes;

    protected LengthCodeResource $lengthCode;

    protected AnonymousResourceCollection $sizeCodes;

    protected SizeCodeResource $sizeCode;

    protected AnonymousResourceCollection $typeCodes;

    protected TypeCodeResource $typeCode;

    public function getTypeGroups(): AnonymousResourceCollection
    {
        return TypeGroupResource::collection(TypeGroup::all());
    }

    public function getTypeGroup(string $code): TypeGroupResource
    {
        $typeGroup = TypeGroup::find($code);

        return new TypeGroupResource($typeGroup);
    }

    public function getSizeTypes(): AnonymousResourceCollection
    {
        return SizeTypeResource::collection(SizeType::all());
    }

    public function getSizeType(string $code): SizeTypeResource
    {
        $sizeType = SizeType::find($code);

        return new SizeTypeResource($sizeType);
    }

    public function getLengthCodes(): AnonymousResourceCollection
    {
        return LengthCodeResource::collection(LengthCode::all());
    }

    public function getLengthCode(string $code): LengthCodeResource
    {
        $lengthCode = LengthCode::find($code);

        return new LengthCodeResource($lengthCode);
    }

    public function getSizeCodes(): AnonymousResourceCollection
    {
        return SizeCodeResource::collection(SizeCode::all());
    }

    public function getSizeCode(string $code): SizeCodeResource
    {
        $sizeCode = SizeCode::find($code);

        return new SizeCodeResource($sizeCode);
    }

    public function getTypeCodes(): AnonymousResourceCollection
    {
        return TypeCodeResource::collection(TypeCode::all());
    }

    public function getTypeCode(string $code): TypeCodeResource
    {
        $typeCode = TypeCode::find($code);

        return new TypeCodeResource($typeCode);
    }
}
