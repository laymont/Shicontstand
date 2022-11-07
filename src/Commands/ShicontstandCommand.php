<?php

namespace Laymont\Shicontstand\Commands;

use Illuminate\Console\Command;

class ShicontstandCommand extends Command
{
    public $signature = 'shicontstand';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
