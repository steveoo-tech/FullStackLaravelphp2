<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->insert(['vendorName'=>'GFS',
        'yearStarted'=>1985, 'city'=>'Vancouver', 'province' => 'BC',
        'country'=>'Canada', 'discount'=>15.7]);
    DB::table('vendors')->insert(['vendorName'=>'Sobeys',
        'yearStarted'=>1962, 'city'=>'Montreal', 'province' => 'QC',
        'country'=>'Canada', 'discount'=>11.0]);
    DB::table('vendors')->insert(['vendorName'=>'Sysco',
        'yearStarted'=>1973, 'city'=>'Calgary', 'province' => 'AB',
        'country'=>'Canada', 'discount'=>14.0]);
    DB::table('vendors')->insert(['vendorName'=>'Koning',
        'yearStarted'=>1990, 'city'=>'Vancouver', 'province' => 'BC',
        'country'=>'Canada', 'discount'=>18.0]);
    DB::table('vendors')->insert(['vendorName'=>'Yen Brothers',
        'yearStarted'=>1980, 'city'=>'Vancouver', 'province' => 'BC',
        'country'=>'Canada', 'discount'=>10.0]);
    
    }
}
