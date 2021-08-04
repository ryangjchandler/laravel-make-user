<?php

namespace RyanChandler\LaravelMakeUser;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RyanChandler\LaravelMakeUser\Commands\MakeUserCommand;

class LaravelMakeUserServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-make-user')
            ->hasCommand(MakeUserCommand::class);
    }
}
