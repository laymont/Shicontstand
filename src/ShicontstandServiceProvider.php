<?php

namespace Laymont\Shicontstand;

use Illuminate\Support\ServiceProvider;
use Laymont\Shicontstand\Repositories\TypeGroupRepository;

class ShicontstandServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/shicontstand.php',
            'shicontstand'
        );

        $this->app->singleton(TypeGroupRepository::class, function ($app) {
            return new TypeGroupRepository(
                new Models\TypeGroup
            );
        });

        $this->app->singleton('shicontstand', function ($app) {
            return new Shicontstand;
        });
    }

    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

            $this->publishes([
                __DIR__.'/../config/shicontstand.php' => config_path('shicontstand.php'),
            ], 'shicontstand-config');

            $this->publishes([
                __DIR__.'/../database/seeders/TypeGroupSeeder.php' => database_path('seeders/TypeGroupSeeder.php'),
                __DIR__.'/../database/seeders/SizeTypeSeeder.php' => database_path('seeders/SizeTypeSeeder.php'),
                __DIR__.'/../database/seeders/LengthCodeSeeder.php' => database_path('seeders/LengthCodeSeeder.php'),
                __DIR__.'/../database/seeders/SizeCodeSeeder.php' => database_path('seeders/SizeCodeSeeder.php'),
                __DIR__.'/../database/seeders/TypeCodeSeeder.php' => database_path('seeders/TypeCodeSeeder.php'),
            ], 'shicontstand-seeders');
        }
    }
}
