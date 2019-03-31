<?php

namespace App\Traits;
use Webpatser\Uuid\Uuid;

trait Uuids
{
    protected static function boot(){
        parent::boot();
        self::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Uuid::generate(4);
        });
    }
}
