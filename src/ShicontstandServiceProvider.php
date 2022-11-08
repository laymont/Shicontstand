<?php

namespace Laymont\Shicontstand;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;
use Laymont\Shicontstand\Commands\ShicontstandCommand;

class ShicontstandServiceProvider extends ServiceProvider
{
    use PublishesMigrations;
    use PublishesSeeders;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     *
     * @throws BindingResolutionException
     */
    public function boot(): void
    {
        /*
         |--------------------------------------------------------------------------
         | Seed Service Provider need on boot() method
         |--------------------------------------------------------------------------
         */

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
            $this->registerMigrations(__DIR__.'/../database/migrations');
            $this->registerSeeders(__DIR__.'/../database/seeders');
            $this->commands([
                ShicontstandCommand::class,
            ]);
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        // Register the service the package provides.
        $this->app->singleton('shicontstand', function ($app) {
            return new Shicontstand;
        });

        $this->mergeConfigFrom(__DIR__.'/../config/shicontstand.php', 'shicontstand');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['shicontstand'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        $this->publishes([
            __DIR__.'/../config/shicontstand.php' => config_path('shicontstand.php'),
        ], 'shicontstand-config');
    }
}
