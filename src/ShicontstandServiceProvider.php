<?php

namespace Laymont\Shicontstand;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ShicontstandServiceProvider extends ServiceProvider implements DeferrableProvider
{
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
            $this->registerRoutes();

            $this->publishes([
                __DIR__.'/../config/shicontstand.php' => config_path('shicontstand.php'),
            ], 'shicontstand-config');

            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

            $this->publishes([
                __DIR__.'/../database/seeders/TypeGroupSeeder.php' => database_path('seeders/TypeGroupSeeder.php'),
                __DIR__.'/../database/seeders/SizeTypeSeeder.php' => database_path('seeders/SizeTypeSeeder.php'),
                __DIR__.'/../database/seeders/LengthCodeSeeder.php' => database_path('seeders/LengthCodeSeeder.php'),
                __DIR__.'/../database/seeders/SizeCodeSeeder.php' => database_path('seeders/SizeCodeSeeder.php'),
                __DIR__.'/../database/seeders/TypeCodeSeeder.php' => database_path('seeders/TypeCodeSeeder.php'),
                __DIR__.'/../database/seeders/ShicontstandSeeder.php' => database_path('seeders/ShicontstandSeeder.php'),
            ], 'shicontstand-seeders');
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

    protected function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        });
    }

    protected function routeConfiguration()
    {
        return [
            'prefix' => config('shicontstand.prefix'),
            'middleware' => config('shicontstand.middleware'),
        ];
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
