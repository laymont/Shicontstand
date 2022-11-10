<?php

namespace Laymont\Shicontstand\Http\Traits;

use Illuminate\Database\Eloquent\Model;
use Laymont\Shicontstand\Http\Concerns\ContainerValidation;

trait ScsAttributeTrait
{
    protected static ContainerValidation $containerValidation;

    protected static function bootScsAttributeTrait(): void
    {
        self::getClass();
        $containerNumber = config('shicontstand.model.container_number');
        $isoType = config('shicontstand.model.iso_type');
        static::retrieved(function (Model $model) use ($containerNumber) {
            $model->scs = self::$containerValidation->setNumber($model->{$containerNumber});
            $model->makeHidden('containerNumber');
        });
    }

    protected static function getClass(): void
    {
        self::$containerValidation = new ContainerValidation();
    }
}
