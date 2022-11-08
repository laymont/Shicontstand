<?php

namespace Laymont\Shicontstand\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class ShicontstandCommand extends Command
{
    public $signature = 'shicontstand:seed';

    public $description = 'Run seeders Shicontstand';

    public function handle(): int
    {
        $this->info('Run Shicontstand Seeder');
        //$migrations = File::files(database_path('seeders'));
        Artisan::call('db:seed --class=TypeGroupSeeder');
        Artisan::call('db:seed --class=SizeTypeSeeder');
        Artisan::call('db:seed --class=LengthCodeSeeder');
        Artisan::call('db:seed --class=SizeCodeSeeder');
        Artisan::call('db:seed --class=TypeCodeSeeder');
        $this->comment('All done');
        return self::SUCCESS;
    }
}
