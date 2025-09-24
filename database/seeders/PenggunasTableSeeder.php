<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        DB::table('penggunas')->delete();
        DB::table('penggunas')->insert([
            [
                 'nama_pengguna' => 'Zaskia',
                 'no_telepon' => '09866629',
                 'email' => 'zaskia651@gmail.com',
                 'jenis_kelamin' => 'Perempuan',
            ],
            [
                'nama_pengguna' => 'Anggia',
                 'no_telepon' => '087219128',
                 'email' => 'anggia45@gmail.com',
                 'jenis_kelamin' => 'Perempuan',
        ],[
                 'nama_pengguna' => 'Dilla',
                 'no_telepon' => '0826387178',
                 'email' => 'dilla09@gmail.com',
                 'jenis_kelamin' => 'Perempuan',
            ],
        ]);
    }
}
