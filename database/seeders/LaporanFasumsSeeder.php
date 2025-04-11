<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Str;

class LaporanFasumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laporan_fasums')->insert([
            [
                'laporan_id' => 1,
                'fasum_id' => 1,
                'status' => 'Tidak terselesaikan',
                'image_path' => 'dummy_1.png',
                'image_selesai' => null,
                'deskripsi' => 'Jembatan mengalami keretakan fatal.',
                'keterangan_dinas' => 'Sudah tidak tertolong lagi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'laporan_id' => 2,
                'fasum_id' => 3,
                'status' => 'Dikerjakan',
                'image_path' => null,
                'image_selesai' => null,
                'deskripsi' => 'Halte tidak ada atap.',
                'keterangan_dinas' => 'Sudah dikerjakan vendor.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
