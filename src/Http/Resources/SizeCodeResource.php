<?php

namespace Laymont\Shicontstand\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

class SizeCodeResource extends \Illuminate\Http\Resources\Json\JsonResource
{
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'code' => $this->code,
            'container_height' => $this->container_height,
            'width' => $this->width
        ];
    }
}
