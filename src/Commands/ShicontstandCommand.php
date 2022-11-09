<?php

namespace Laymont\Shicontstand\Commands;

use Illuminate\Console\Command;

/**
 * @method callAfterResolving(string $class, \Closure $param)
 */
class ShicontstandCommand extends Command
{
    public $signature = 'shicontstand:seed';

    public $description = 'Run seeders Shicontstand';

    public function handle(): int
    {
        $this->info('Run Shicontstand Seeder');

        $this->comment('All done');

        return self::SUCCESS;
    }
}
