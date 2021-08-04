<?php

namespace RyanChandler\LaravelMakeUser;

use Closure;

class MakeUser
{
    public static $model = \App\Models\User::class;

    public static $extend;

    public static function model(string $model)
    {
        static::$model = $model;
    }

    public static function extend(Closure $callback)
    {
        static::$extend = $callback;
    }
}
