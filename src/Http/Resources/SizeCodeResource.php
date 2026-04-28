<?php

namespace Laymont\Shicontstand\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

/**
 * @property mixed $code
 * @property mixed $container_height
 * @property mixed $width
 */
class SizeCodeResource extends JsonResource
{
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'code' => $this->code,
            'container_height' => $this->container_height,
            'width' => $this->width,
        ];
    }
}
