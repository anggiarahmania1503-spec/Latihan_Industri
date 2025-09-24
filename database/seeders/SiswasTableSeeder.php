<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            [
                 'nama_lengkap' => 'Dila',
                 'jenis_kelamin' => 'Perempuan',
                 'tgl_lahir' => '2008-10-22',
                  'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Ani',
                'jenis_kelamin' => 'Perempuan',
                'tgl_lahir' => '2009-07-03',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Zaskia',
                'jenis_kelamin' => 'Perempuan',
                'tgl_lahir' => '2009-08-30',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Riska',
                'jenis_kelamin' => 'Perempuan',
                'tgl_lahir' => '2009-01-16',
                'kelas' => 'XI RPL 1',
            ],
            [
                'nama_lengkap' => 'Awa',
                'jenis_kelamin' => 'Perempuan',
                'tgl_lahir' => '2009-02-10',
                'kelas' => 'XI RPL 1',
            ],
        ]);
    }
}