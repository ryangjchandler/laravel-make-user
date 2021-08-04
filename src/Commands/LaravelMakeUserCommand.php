<?php

namespace RyanChandler\LaravelMakeUser\Commands;

use Illuminate\Console\Command;

class LaravelMakeUserCommand extends Command
{
    public $signature = 'laravel-make-user';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
