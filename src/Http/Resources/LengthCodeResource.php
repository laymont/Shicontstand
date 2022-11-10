<?php

namespace Laymont\Shicontstand\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;

/**
 * @property mixed $code
 * @property mixed $container_length
 */
class LengthCodeResource extends \Illuminate\Http\Resources\Json\JsonResource
{
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'code' => $this->code,
            'container_length' => $this->container_length,
        ];
    }
}
