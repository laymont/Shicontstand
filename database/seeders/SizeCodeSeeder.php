<?php

namespace Illuminate\Database;

use Laymont\Shicontstand\Models\SizeCode;

class SizeCodeSeeder extends \Illuminate\Database\Seeder
{
    public function run()
    {
        collect([
            ['code' => '0', 'container_height' => '8ft (2,438mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '2', 'container_height' => '8ft 6in (2,591mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '2', 'container_height' => '8ft 6in (2,591mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '4', 'container_height' => '9ft (2,743mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '5', 'container_height' => '9ft 6in (2,896mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '6', 'container_height' => '> 9ft 6in (2,896mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '8', 'container_height' => '4ft 3in (1,295mm)', 'width' => '8ft (2,438mm)'],
            ['code' => '9', 'container_height' => '<= 4ft (1,219mm)', 'width' => 'null'],
            ['code' => 'C', 'container_height' => '8ft 6in (2,591mm)', 'width' => '8ft (2,438mm) < x ≤ 8ft 2in (2,500mm)'],
            ['code' => 'D', 'container_height' => '9ft (2,743mm)', 'width' => '8ft (2,438mm) < x ≤ 8ft 2in (2,500mm)'],
            ['code' => 'E', 'container_height' => '9ft 6in (2,896mm)', 'width' => '8ft (2,438mm) < x ≤ 8ft 2in (2,500mm)'],
            ['code' => 'F', 'container_height' => '> 9ft 6in (2,896mm)', 'width' => '8ft (2,438mm) < x ≤ 8ft 2in (2,500mm)'],
        ])->each(fn ($item) => SizeCode::create($item));
    }
}
