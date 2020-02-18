<?php

namespace Riipandi\LaravelOpsi\Console;

use Riipandi\LaravelOpsi\OpsiFacade as Opsi;
use Illuminate\Console\Command;

class OpsiGetCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'opsi:get {key : Setting key}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get a setting value';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $result = Opsi::get($this->argument('key'));

        if (!$result) {
            $this->error('No option with that key!');
        }

        $this->info($result);
    }
}
