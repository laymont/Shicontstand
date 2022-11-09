<?php

namespace Laymont\Shicontstand\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

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
