<?php

namespace RyanChandler\LaravelMakeUser\Commands;

use Illuminate\Console\Command;
use RyanChandler\LaravelMakeUser\MakeUser;

class MakeUserCommand extends Command
{
    protected $signature = 'make:user';

    protected $description = 'Create a new User.';

    public function handle()
    {
        $model = MakeUser::$model;

        $name = $this->ask('Name');
        $email = $this->ask('Email');
        $password = $this->secret('Password');

        $model::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        $this->info('User created successfully.');
    }
}
