<?php

namespace Laymont\Shicontstand\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Laymont\Shicontstand\Http\Controllers\TypeGroupController;
use Laymont\Shicontstand\ShicontstandServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;


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

    protected function getPackageProviders($app)
    {
        return [
            ShicontstandServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testbench');
        config()->set('database.connections.testbench', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);
    }

    protected function defineDatabaseMigrations()
    {
        $this->loadLaravelMigrations(['--database' => 'testbench']);
    }

    protected function defineRoutes($router)
    {
        $router->get('scs/type_groups/index', [TypeGroupController::class, 'index']);
    }
}
