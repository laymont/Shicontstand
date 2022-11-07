<?php

namespace Laymont\Shicontstand;

use Generator;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\Str;

trait PublishesSeeders
{
    /**
     * Searches migrations and publishes them as assets.
     *
     * @param  string  $string
     * @return void
     *
     * @throws BindingResolutionException
     */
    protected function registerSeeders(string $string): void
    {
        if ($this->app->runningInConsole()) {
            $generator = function (string $directory): Generator {
                foreach ($this->app->make('files')->allFiles($directory) as $file) {
                    yield $file->getPathname() => $this->app->databasePath(
                        'seeders/'.now()->format('Y_m_d_His').Str::remove('.stub', Str::after($file->getFilename(), 'create_scs'))
                    );
                    sleep(1);
                }
            };

            $this->publishes(iterator_to_array($generator($directory)), 'shicontstand-seeders');
        }
    }
}
