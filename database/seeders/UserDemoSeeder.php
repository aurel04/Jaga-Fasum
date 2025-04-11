<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Dinas;
use Illuminate\Support\Facades\DB;

class UserDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Dinas',
                'email' => 'admin@dinas.com',
                'password' => Hash::make('password'),
                'role' => 'dinas',
                'dinas_id' => 1,
                'kota' => 'Kota Surabaya',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Warga Biasa',
                'email' => 'warga@warga.com',
                'password' => Hash::make('password'),
                'role' => 'warga',
                'dinas_id' => 1,
                'kota' => null,
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
