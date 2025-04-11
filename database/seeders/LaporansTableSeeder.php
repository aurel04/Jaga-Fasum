<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporans')->insert([
            [
                'subject' => 'Jembatan Kota rusak',
                'status' => 'Antri',
                'created_by' => 2, // warga
                'dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'updated_by' => null,
            ],
            [
                'subject' => 'Halte tidak layak',
                'status' => 'Dikerjakan',
                'created_by' => 2,
                'dinas_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'updated_by' => 1, // dinas
            ],
        ]);
    }
}
