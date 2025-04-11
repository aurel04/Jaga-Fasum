<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Dinas;

class FasumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('fasums')->insert([
            [
                'nama' => 'Taman Kota Bobi',
                'luas' => 5000, // In square meters
                'kondisi' => 'Baik',
                'dinas_terkait' => 1,
                'asal_fasilitas' => 'Swasta',
                'lat' => 598,
                'long' => 126,
                'image_path' => 'taman_1.jpeg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Lapangan Olahraga Ihiy',
                'luas' => 3000, // In square meters
                'kondisi' => 'Baik',
                'dinas_terkait' => 1,
                'asal_fasilitas' => 'Swasta',
                'lat' => 897,
                'long' => 109,
                'image_path' => 'lapangan_1.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Bus Stop Halte A',
                'luas' => 8000, // In square meters
                'kondisi' => 'Baik',
                'dinas_terkait' => 1,
                'asal_fasilitas' => 'APBN',
                'lat' => 123,
                'long' => 106,
                'image_path' => 'halte_1.jpeg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Lapangan Serbaguna Semeru',
                'luas' => 4500,
                'kondisi' => 'Rusak Berat',
                'dinas_terkait' => 1,
                'asal_fasilitas' => 'APBD',
                'lat' => '-7.7948',
                'long' => '110.3658',
                'image_path' => 'lapangan_2.jpeg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
