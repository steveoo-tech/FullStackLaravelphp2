<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     // Get vendors to reference their ID's when creating products.
    $koning = DB::table('vendors')->where('vendorName','=','Koning')
    ->first();
    $GFS    = DB::table('vendors')->where('vendorName','=','GFS')
            ->first();
    $yenBros = DB::table('vendors')->where('vendorName','=','Yen Brothers')
            ->first(); 
    $sysco   = DB::table('vendors')->where('vendorName','=','Sysco')
            ->first();  
    // Insert products with id's of vendors which are foreign keys.
    DB::table('products')->insert(['productName'=>'carrots',
        'quantity'=>5, 'price'=>4.28, 'manufacturer'=>'McCain',
        'vendor_id'=>$koning->id]);
    DB::table('products')->insert(['productName'=>'peas',
        'quantity'=>15, 'price'=>3.25, 'manufacturer'=>'McCain',
        'vendor_id'=>$sysco->id]);
    DB::table('products')->insert(['productName'=>'oranges',
        'quantity'=>22, 'price'=>6.25, 'manufacturer'=>'McCain',
        'vendor_id'=>$koning->id]);
    DB::table('products')->insert(['productName'=>'asparagus',
        'quantity'=>18, 'price'=>7.25, 'manufacturer'=>'McCain',
        'vendor_id'=>$GFS->id]); 
    }
}
