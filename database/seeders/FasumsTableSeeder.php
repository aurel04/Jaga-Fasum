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
                'image_path' => 'https://asset.kompas.com/crops/UwZ4WmjzrQAcPiYq4FAbSJPyjHA=/14x0:870x571/1200x800/data/photo/2021/12/03/61a9a2da0590b.jpg',
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
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjNJKZ3zSfRr7nCPbeDbhLrims_EHyoKHTqA&s',
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
                'image_path' => 'https://www.samtrans.com/files/styles/small_100_1x/public/images/2023-11/edited%20bus%20stop%20pic.jpg?itok=0WLu-L73',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Taman Kota Bobi',
                'luas' => 5000,
                'kondisi' => 'Baik',
                'dinas_terkait' => 2,
                'asal_fasilitas' => 'Swasta',
                'lat' => '598',
                'long' => '126',
                'image_path' => 'https://asset.kompas.com/crops/UwZ4WmjzrQAcPiYq4FAbSJPyjHA=/14x0:870x571/1200x800/data/photo/2021/12/03/61a9a2da0590b.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Lapangan Olahraga Ihiy',
                'luas' => 3000,
                'kondisi' => 'Baik',
                'dinas_terkait' => 2,
                'asal_fasilitas' => 'Swasta',
                'lat' => '897',
                'long' => '109',
                'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjNJKZ3zSfRr7nCPbeDbhLrims_EHyoKHTqA&s',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Bus Stop Halte A',
                'luas' => 8000,
                'kondisi' => 'Baik',
                'dinas_terkait' => 2,
                'asal_fasilitas' => 'APBN',
                'lat' => '123',
                'long' => '106',
                'image_path' => 'https://www.samtrans.com/files/styles/small_100_1x/public/images/2023-11/edited%20bus%20stop%20pic.jpg?itok=0WLu-L73',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Taman Kenangan Surya',
                'luas' => 6000,
                'kondisi' => 'Rusak Ringan',
                'dinas_terkait' => 2,
                'asal_fasilitas' => 'APBD',
                'lat' => '-7.2575',
                'long' => '112.7521',
                'image_path' => 'https://cdn0-production-images-kly.akamaized.net/Sf6gIzMBk3cYbLRvJf6-cDInBVo=/0x0:1000x563/640x360/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3274764/original/001419700_1600506411-taman.jpg',
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
                'image_path' => 'https://asset.kompas.com/crops/5OZ7-Z8pLL6QoZKRLd5zqMYK-8s=/0x0:1000x667/750x500/data/photo/2022/01/07/61d81d63efc94.jpg',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Terminal Kertajaya',
                'luas' => 7000,
                'kondisi' => 'Baik',
                'dinas_terkait' => 1,
                'asal_fasilitas' => 'APBN',
                'lat' => '-7.2903',
                'long' => '112.7278',
                'image_path' => 'https://cdn1-production-images-kly.akamaized.net/V0BvYzOBwIDpv4BdXPy1ZZ9KXeE=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3286014/original/013153100_1601457469-terminal.png',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama' => 'Taman Bunga Melati',
                'luas' => 2000,
                'kondisi' => 'Baik',
                'dinas_terkait' => 1,
                'asal_fasilitas' => 'Swasta',
                'lat' => '-7.9788',
                'long' => '112.5617',
                'image_path' => 'https://images.unsplash.com/photo-1584697964154-9625edb781f8',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
