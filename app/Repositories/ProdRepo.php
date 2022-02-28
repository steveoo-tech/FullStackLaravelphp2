<?php
namespace app\Repositories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdRepo {
    public function getRows() {
        $mcain    = DB::table('products')->where('manufacturer','=','McCain');
        $products = DB::table('products')->where('manufacturer', '=', 'Farm Fresh')
                    ->union($mcain)
                    ->get();
        return $products;
    } 
}