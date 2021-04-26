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
        //insert data ke table pegawai
        DB::table('detail_profile')->insert([
        	'address'=>'Jember',
        	'nomor_tlp'=>'089612598100',
        	'ttl'=>'2000-06-02',
        	'foto'=>'picture.png'
        ]);
    }
}

