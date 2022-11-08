<?php

namespace Database\Seeders;

use Laymont\Shicontstand\Models\LengthCode;

class LengthCodeSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        collect([
            ['code' => '1', 'container_length' => '10ft (3,048mm)'],
            ['code' => '1', 'container_length' => '10ft (3,048mm)'],
            ['code' => '2', 'container_length' => '20ft (6,096mm)'],
            ['code' => '3', 'container_length' => '30ft (9,144mm)'],
            ['code' => '4', 'container_length' => '40ft (12,192mm)'],
            ['code' => 'B', 'container_length' => '24ft (7,315mm)'],
            ['code' => 'C', 'container_length' => '24ft 6in (7,468mm)'],
            ['code' => 'G', 'container_length' => '41ft (12,497mm)'],
            ['code' => 'H', 'container_length' => '43ft (13,106mm)'],
            ['code' => 'L', 'container_length' => '45ft (13,716mm)'],
            ['code' => 'M', 'container_length' => '48ft (14,630mm)'],
            ['code' => 'N', 'container_length' => '49ft (14,935mm)'],
        ])->each(fn ($item) => LengthCode::create($item));
    }
}
