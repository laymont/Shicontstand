<?php

namespace Laymont\Shicontstand\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Laymont\Shicontstand\ShicontstandServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
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
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_scs_type_groups_table.php.stub';
        $migration->up();
        */
    }
}
