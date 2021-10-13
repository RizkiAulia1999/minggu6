<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim'   => '2031710076',
            'name'  => 'Muslimatul Rizki Aulia',
            'class' => 'MI-2F',
            'department'   => 'JTI',
            'phone_number' => '085784739251',
        ]);
        DB::table('students')->insert([
            'nim'   => '2031710060',
            'name'  => 'Mustika Putri Winarni',
            'class' => 'MI-2F',
            'department'   => 'JTI',
            'phone_number' => '082257353829',
        ]);
        DB::table('students')->insert([
            'nim'   => '2031710176',
            'name'  => 'Priesca Leylya Syafitri ',
            'class' => 'MI-2F',
            'department'   => 'JTI',
            'phone_number' => '081803201717',
        ]);
    }
}
