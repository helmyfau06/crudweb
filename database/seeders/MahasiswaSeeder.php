<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'npm' => '2141401',
            'nama' => 'Ahmad',
            'jenkel' => 'Laki-laki',
            'prodi' => 'Sistem Informasi',
            'fakultas' => 'Ilmu Komputer'
        ]);
    }
}
