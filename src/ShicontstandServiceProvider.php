<?php

namespace Laymont\Shicontstand;

use Illuminate\Support\ServiceProvider;

class ShicontstandServiceProvider extends ServiceProvider
{
    use PublishesMigrations;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
            $this->registerMigrations(__DIR__.'database/migrations');
            $this->publishes([
                __DIR__.'config/shicontstand.php' =>
                config_path('shicontstand.php')
            ], 'shicontstand-config');
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'config/shicontstand.php', 'shicontstand');

        // Register the service the package provides.
        $this->app->singleton('shicontstand', function ($app) {
            return new Shicontstand;
        });
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
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'config/shicontstand.php' => config_path('shicontstand.php'),
        ], 'shicontstand.config');
    }
}
