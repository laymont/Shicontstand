<?php

namespace Laymont\Shicontstand;

use Generator;
use Illuminate\Contracts\Container\BindingResolutionException;

trait PublishesSeeders
{
    /**
     * Searches migrations and publishes them as assets.
     *
     * @param  string  $directory
     * @return void
     *
     * @throws BindingResolutionException
     */
    protected function registerSeeders(string $directory): void
    {
        if ($this->app->runningInConsole()) {
            $generator = function (string $directory): Generator {
                foreach ($this->app->make('files')->allFiles($directory) as $file) {
                    yield $file->getPathname() => $this->app->databasePath(
                        'seeders/'.$file->getFilename()
                    );
                    sleep(1);
                }
            };

            $this->publishes(iterator_to_array($generator($directory)), 'shicontstand-seeders');
        }
    }
}
