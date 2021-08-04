<?php

namespace RyanChandler\LaravelMakeUser;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RyanChandler\LaravelMakeUser\LaravelMakeUser
 */
class LaravelMakeUserFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-make-user';
    }
}
