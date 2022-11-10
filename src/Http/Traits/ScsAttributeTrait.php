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
        $property = config('shicontstand.model.property');
        static::retrieved(function (Model $model) use ($property) {
            $model->scs = self::$containerValidation->setNumber($model->{$property});
            $model->makeHidden('containerNumber');
        });
    }

    protected static function getClass(): void
    {
        self::$containerValidation = new ContainerValidation();
    }
}
