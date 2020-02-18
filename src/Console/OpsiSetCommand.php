<?php

namespace Riipandi\LaravelOpsi\Console;

use Riipandi\LaravelOpsi\OpsiFacade as Opsi;
use Illuminate\Console\Command;

class OpsiSetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'opsi:set {key : Setting key} {value : Setting value}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a setting value.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        Opsi::set($this->argument('key'), $this->argument('value'));

        $this->info('Setting value created.');
    }
}
