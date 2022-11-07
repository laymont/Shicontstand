<?php

namespace Laymont\Shicontstand;

use Illuminate\Support\ServiceProvider;

class ShicontstandServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'laymont');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'laymont');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/shicontstand.php', 'shicontstand');

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
    public function provides()
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
            __DIR__.'/../config/shicontstand.php' => config_path('shicontstand.php'),
        ], 'shicontstand.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/laymont'),
        ], 'shicontstand.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/laymont'),
        ], 'shicontstand.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/laymont'),
        ], 'shicontstand.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
