<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('biodatas')->delete();
        DB::table('biodatas')->insert([
            [
                 'nama_lengkap' => 'Zaskia Ramadhani Putri',
                 'jenis_kelamin' => 'Perempuan',
                 'tanggal_lahir' => '2009-10-09',
                 'tempat_lahir' => 'Bandung',
                 'agama' => 'Islam',
                 'alamat' => 'Cilebak',
                 'telepon' => '09373829',
                 'email' => 'zaskia@gmail.com',
            ],
            [
                'nama_lengkap' => 'Ani Nur Rahayu',
                 'jenis_kelamin' => 'Perempuan',
                 'tanggal_lahir' => '2009-09-30',
                 'tempat_lahir' => 'Bandung',
                 'agama' => 'Islam',
                 'alamat' => 'Rancamanyar',
                 'telepon' => '093712329',
                 'email' => 'niani@gmail.com',
            ],
            [
                 'nama_lengkap' => 'Riska Aulia',
                 'jenis_kelamin' => 'Perempuan',
                 'tanggal_lahir' => '2009-08-19',
                 'tempat_lahir' => 'Bandung',
                 'agama' => 'Islam',
                 'alamat' => 'Cibaduyut',
                 'telepon' => '0937323459',
                 'email' => 'riskaaa@gmail.com',
            ],
            [
                'nama_lengkap' => 'Salwa Khaerunnisa',
                 'jenis_kelamin' => 'Perempuan',
                 'tanggal_lahir' => '2009-07-11',
                 'tempat_lahir' => 'Bandung',
                 'agama' => 'Islam',
                 'alamat' => 'Babakan',
                 'telepon' => '09372939329',
                 'email' => 'awaaa@gmail.com',
            ],
            [
                'nama_lengkap' => 'Anggia Rahmania',
                 'jenis_kelamin' => 'Perempuan',
                 'tanggal_lahir' => '2009-06-15',
                 'tempat_lahir' => 'Bandung',
                 'agama' => 'Islam',
                 'alamat' => 'Cibedug',
                 'telepon' => '09373828299',
                 'email' => 'anggioou@gmail.com',
            ],
            [
                'nama_lengkap' => 'Aira Silmi Nabila',
                 'jenis_kelamin' => 'Perempuan',
                 'tanggal_lahir' => '2009-05-16',
                 'tempat_lahir' => 'Bandung',
                 'agama' => 'Islam',
                 'alamat' => 'Citepus',
                 'telepon' => '09373812329',
                 'email' => 'ayaa@gmail.com',
            ],
            [
                'nama_lengkap' => 'Siti Nur Fadilla',
                 'jenis_kelamin' => 'Perempuan',
                 'tanggal_lahir' => '2009-12-29',
                 'tempat_lahir' => 'Bandung',
                 'agama' => 'Islam',
                 'alamat' => 'Cangkuang',
                 'telepon' => '09373830229',
                 'email' => 'dididila@gmail.com',
            ],
            [
                'nama_lengkap' => 'Raisha Jihandaraha',
                 'jenis_kelamin' => 'Perempuan',
                 'tanggal_lahir' => '2009-11-23',
                 'tempat_lahir' => 'Bandung',
                 'agama' => 'Islam',
                 'alamat' => 'Cibogo',
                 'telepon' => '09389173829',
                 'email' => 'icaaa@gmail.com',
            ],
            [
                'nama_lengkap' => 'Aprila Asyifa Gaza',
                 'jenis_kelamin' => 'Perempuan',
                 'tanggal_lahir' => '2009-01-09',
                 'tempat_lahir' => 'Bandung',
                 'agama' => 'Islam',
                 'alamat' => 'Cibogo',
                 'telepon' => '09373894929',
                 'email' => 'cipouu@gmail.com',
            ],
            [
                'nama_lengkap' => 'Sani Desya',
                 'jenis_kelamin' => 'Perempuan',
                 'tanggal_lahir' => '2008-11-09',
                 'tempat_lahir' => 'Bandung',
                 'agama' => 'Islam',
                 'alamat' => 'Sayuran',
                 'telepon' => '09373829',
                 'email' => 'sancoo@gmail.com',
            ],
        ]);
    }
}
