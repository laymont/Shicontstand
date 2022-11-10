<?php

namespace Laymont\Shicontstand\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class TypeGroupResource extends JsonResource
{
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'code' => $this->code,
            'description' => $this->description,
            'size_types' => $this->when(
                $request->routeIs('type_groups.show'),
                SizeTypeResource::collection($this->sizeTypes)
            ),
        ];
    }
}
