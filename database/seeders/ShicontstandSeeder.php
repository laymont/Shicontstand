<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShicontstandSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            TypeGroupSeeder::class,
            SizeTypeSeeder::class,
            LengthCodeSeeder::class,
            SizeCodeSeeder::class,
            TypeCodeSeeder::class,
        ]);
    }
}
