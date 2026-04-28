<?php

namespace Laymont\Shicontstand\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laymont\Shicontstand\Http\Controllers\LengthCodeController;
use Laymont\Shicontstand\Http\Controllers\SizeCodeController;
use Laymont\Shicontstand\Http\Controllers\SizeTypeController;
use Laymont\Shicontstand\Http\Controllers\TypeCodeController;
use Laymont\Shicontstand\Http\Controllers\TypeGroupController;
use Laymont\Shicontstand\ShicontstandServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Laymont\\Shicontstand\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app): array
    {
        return [
            ShicontstandServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testbench');
        config()->set('database.connections.testbench', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function defineDatabaseMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    protected function defineRoutes($router)
    {
        $router->resource('type_groups', TypeGroupController::class)
            ->only(['index', 'show']);
        $router->resource('size_types', SizeTypeController::class)
            ->only(['index', 'show']);
        $router->resource('length_codes', LengthCodeController::class)
            ->only(['index', 'show']);
        $router->resource('size_codes', SizeCodeController::class)
            ->only(['index', 'show']);
        $router->resource('type_codes', TypeCodeController::class)
            ->only(['index', 'show']);
    }
}
