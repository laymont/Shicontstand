<?php

namespace Laymont\Shicontstand\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

/**
 * @property mixed $type_group_code
 * @property mixed $code
 * @property mixed $description
 */
class SizeTypeResource extends \Illuminate\Http\Resources\Json\JsonResource
{
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'type_group_code' => $this->type_group_code,
            'code' => $this->code,
            'description' => $this->description,
        ];
    }
}
