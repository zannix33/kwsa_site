<?php

namespace Modulatte\Core\Console\Commands;

use Illuminate\Console\Command;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'modulatte-twill:install {type?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install base Modulatte Twill Framework. If new installation, use this command php artisan modulatte-twill:install fresh';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->argument('type') == 'fresh') {
            $this->call('key:generate');
            $this->call('migrate:fresh');
            $this->call('db:seed');
            $this->call('storage:link');
        } else {
            $this->call('migrate', ['--force' => true]);
        }
    }

}
