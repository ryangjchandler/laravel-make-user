<?php

namespace RyanChandler\LaravelMakeUser\Commands;

use Closure;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
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

        $fields = [
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ];

        if (MakeUser::$extend instanceof Closure) {
            $fields = call_user_func(MakeUser::$extend, $this, $fields);
        }

        $model::create($fields);

        $this->info('User created successfully.');
    }
}
