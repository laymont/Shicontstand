<?php

namespace Laymont\Shicontstand\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

/**
 * @property mixed $code
 * @property mixed $description
 */
class TypeCodeResource extends \Illuminate\Http\Resources\Json\JsonResource
{
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'code' => $this->code,
            'description' => $this->description,
        ];
    }
}
