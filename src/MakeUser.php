<?php

namespace RyanChandler\LaravelMakeUser;

class MakeUser
{
    public static $model = \App\Models\User::class;

    public static function model(string $model)
    {
        static::$model = $model;
    }
}
