<?php

namespace RyanChandler\LaravelMakeUser;

use RyanChandler\LaravelMakeUser\Commands\LaravelMakeUserCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMakeUserServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-make-user')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-make-user_table')
            ->hasCommand(LaravelMakeUserCommand::class);
    }
}
