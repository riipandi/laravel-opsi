<?php

namespace Riipandi\LaravelOpsi;

use Illuminate\Support\ServiceProvider;

class OpsiServiceProvider extends ServiceProvider
{
    protected $opsi;

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../database/migrations' => database_path('migrations'),
            ], 'migrations');

            $this->commands([
                \Riipandi\LaravelOpsi\Console\OpsiSetCommand::class,
            ]);
        }

        // Register migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind('opsi', \Riipandi\LaravelOpsi\Opsi::class);
    }
}
