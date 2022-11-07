<?php

namespace Laymont\Shicontstand;

use Generator;
use Illuminate\Support\Str;

trait PublishesMigrations
{
    /**
     * Searches migrations and publishes them as assets.
     *
     * @param  string  $directory
     * @return void
     */
    protected function registerMigrations(string $directory): void
    {
        if ($this->app->runningInConsole()) {
            $generator = function (string $directory): Generator {
                foreach ($this->app->make('files')->allFiles($directory) as $file) {
                    yield $file->getPathname() => $this->app->databasePath(
                        'migrations/'.now()->format('Y_m_d_His').Str::remove('.stub', Str::after($file->getFilename(), 'create_scs'))
                    );
                }
            };

            $this->publishes(iterator_to_array($generator($directory)), 'shicontstand-migrations');
        }
    }
}
