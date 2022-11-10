<?php

namespace Laymont\Shicontstand\Http\Traits;

use Laymont\Shicontstand\Http\Concerns\ContainerValidation;
use Illuminate\Database\Eloquent\Model;

trait ScsAttributeTrait
{
    protected static ContainerValidation $containerValidation;

    protected static function bootScsAttributeTrait(): void
    {
        self::getClass();
        static::retrieved(function (Model $model) {
            $model->scs = self::$containerValidation->setNumber($model->containerNumber);
            $model->makeHidden('containerNumber');
        });
    }

    protected static function getClass(): void
    {
        self::$containerValidation = new ContainerValidation();
    }
}

