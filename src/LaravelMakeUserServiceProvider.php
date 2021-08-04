<?php

namespace RyanChandler\LaravelMakeUser;

use RyanChandler\LaravelMakeUser\Commands\MakeUserCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMakeUserServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-make-user')
            ->hasCommand(MakeUserCommand::class);
    }
}
