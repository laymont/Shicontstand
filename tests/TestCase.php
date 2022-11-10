<?php

namespace Laymont\Shicontstand\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
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
        $this->loadLaravelMigrations(['--database' => 'testbench']);
    }

    protected function defineRoutes($router)
    {
        $router->resource('type_groups', \Laymont\Shicontstand\Http\Controllers\TypeGroupController::class)
            ->only(['index', 'show']);
        $router->resource('size_types', \Laymont\Shicontstand\Http\Controllers\SizeTypeController::class)
            ->only(['index', 'show']);
        $router->resource('length_codes', \Laymont\Shicontstand\Http\Controllers\LengthCodeController::class)
            ->only(['index', 'show']);
        $router->resource('size_codes', \Laymont\Shicontstand\Http\Controllers\SizeCodeController::class)
            ->only(['index', 'show']);
        $router->resource('type_codes', \Laymont\Shicontstand\Http\Controllers\TypeCodeController::class)
            ->only(['index', 'show']);

    }
}
