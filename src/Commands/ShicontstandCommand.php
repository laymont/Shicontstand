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

        if ($this->seedExists(database_path('seeders').'TypeGroupSeeder.php')) {
            Artisan::call('db:seed --class=TypeGroupSeeder');
        }

        if ($this->seedExists(database_path('seeders').'SizeTypeSeeder.php')) {
            Artisan::call('db:seed --class=SizeTypeSeeder');
        }

        if ($this->seedExists(database_path('seeders').'LengthCodeSeeder.php')) {
            Artisan::call('db:seed --class=LengthCodeSeeder');
        }

        if ($this->seedExists(database_path('seeders').'SizeCodeSeeder.php')) {
            Artisan::call('db:seed --class=SizeCodeSeeder');
        }

        if ($this->seedExists(database_path('seeders').'TypeCodeSeeder.php')) {
            Artisan::call('db:seed --class=TypeCodeSeeder');
        }

        $this->comment('All done');
        return self::SUCCESS;
    }

    private function seedExists($filename): bool
    {
        return File::exists($filename);
    }

}
