<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DinasSeeder::class,
            KategoriSeeder::class,
            FasumsTableSeeder::class,
            UserDemoSeeder::class,
            LaporansTableSeeder::class,
            LaporanFasumsSeeder::class,
        ]);
    }
}
