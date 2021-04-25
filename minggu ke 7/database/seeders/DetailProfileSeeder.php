<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data tabel pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Probolinggo',
            'nomor_tlp' => '081234567',
            'ttl' => '2001-07-14',
            'foto' => 'picture.png'
        ]);
    }
}