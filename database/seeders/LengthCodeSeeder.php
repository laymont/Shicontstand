<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laymont\Shicontstand\Models\LengthCode;

class LengthCodeSeeder extends Seeder
{
    public function run()
    {
        /**
         * First size-code character (container length).
         * Source: ISO 6346:2022, Table 1 (BIC - Bureau International des Containers).
         * Codes 6, 7, 8, 9 and R are unassigned. Code L was used for 45ft in the
         * 1995 edition and was replaced by code 5 in the 2022 edition.
         */
        collect([
            ['code' => '1', 'container_length' => '10ft (2,991mm)'],
            ['code' => '2', 'container_length' => '20ft (6,058mm)'],
            ['code' => '3', 'container_length' => '30ft (9,125mm)'],
            ['code' => '4', 'container_length' => '40ft (12,192mm)'],
            ['code' => '5', 'container_length' => '45ft (13,716mm)'],
            ['code' => 'A', 'container_length' => '7,150mm'],
            ['code' => 'B', 'container_length' => '24ft (7,315mm)'],
            ['code' => 'C', 'container_length' => '24ft 6in (7,430mm)'],
            ['code' => 'D', 'container_length' => '7,450mm'],
            ['code' => 'E', 'container_length' => '7,820mm'],
            ['code' => 'F', 'container_length' => '8,100mm'],
            ['code' => 'G', 'container_length' => '41ft (12,500mm)'],
            ['code' => 'H', 'container_length' => '43ft (13,106mm)'],
            ['code' => 'K', 'container_length' => '13,600mm'],
            ['code' => 'L', 'container_length' => '45ft (13,716mm) - ISO 6346:1995, replaced by code 5 in the 2022 edition'],
            ['code' => 'M', 'container_length' => '48ft (14,630mm)'],
            ['code' => 'N', 'container_length' => '49ft (14,935mm)'],
            ['code' => 'P', 'container_length' => '53ft (16,154mm)'],
        ])->each(fn ($item) => LengthCode::firstOrCreate(['code' => $item['code']], $item));
    }
}
