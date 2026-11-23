<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Laymont\Shicontstand\Models\SizeCode;

class SizeCodeSeeder extends Seeder
{
    public function run()
    {
        /**
         * Second size-code character (container height and width).
         * Source: ISO 6346:2022, Table 2 (BIC - Bureau International des Containers).
         * Codes R, S, T, U (width over 2,438mm and below 2,500mm) and L, M, N, P
         * (width over 2,500mm) were added for over-width containers.
         */
        collect([
            ['code' => '0', 'container_height' => '8ft (2,438mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '2', 'container_height' => '8ft 6in (2,591mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '4', 'container_height' => '9ft (2,743mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '5', 'container_height' => '9ft 6in (2,896mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '6', 'container_height' => '> 9ft 6in (2,896mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '7', 'container_height' => '4ft (1,219mm) < h < 8ft (2,438mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '8', 'container_height' => '4ft 3in (1,295mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '9', 'container_height' => '<= 4ft (1,219mm)', 'width' => '8ft (2,438mm)'],
            ['code' => 'R', 'container_height' => '8ft 6in (2,591mm)', 'width' => '8ft (2,438mm) < x < 8ft 2in (2,500mm)'],
            ['code' => 'S', 'container_height' => '9ft (2,743mm)', 'width' => '8ft (2,438mm) < x < 8ft 2in (2,500mm)'],
            ['code' => 'T', 'container_height' => '9ft 6in (2,896mm)', 'width' => '8ft (2,438mm) < x < 8ft 2in (2,500mm)'],
            ['code' => 'U', 'container_height' => '> 9ft 6in (2,896mm)', 'width' => '8ft (2,438mm) < x < 8ft 2in (2,500mm)'],
            ['code' => 'C', 'container_height' => '8ft 6in (2,591mm)', 'width' => '8ft (2,438mm) < x ≤ 8ft 2in (2,500mm)'],
            ['code' => 'D', 'container_height' => '9ft (2,743mm)', 'width' => '8ft (2,438mm) < x ≤ 8ft 2in (2,500mm)'],
            ['code' => 'E', 'container_height' => '9ft 6in (2,896mm)', 'width' => '8ft (2,438mm) < x ≤ 8ft 2in (2,500mm)'],
            ['code' => 'F', 'container_height' => '> 9ft 6in (2,896mm)', 'width' => '8ft (2,438mm) < x ≤ 8ft 2in (2,500mm)'],
            ['code' => 'L', 'container_height' => '8ft 6in (2,591mm)', 'width' => '> 8ft 2in (2,500mm)'],
            ['code' => 'M', 'container_height' => '9ft (2,743mm)', 'width' => '> 8ft 2in (2,500mm)'],
            ['code' => 'N', 'container_height' => '9ft 6in (2,896mm)', 'width' => '> 8ft 2in (2,500mm)'],
            ['code' => 'P', 'container_height' => '> 9ft 6in (2,896mm)', 'width' => '> 8ft 2in (2,500mm)'],
        ])->each(fn ($item) => SizeCode::firstOrCreate(['code' => $item['code']], $item));
    }
}
