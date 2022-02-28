<?php
namespace app\Repositories;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendRepo {
    public function getRows() {
        $bc    = DB::table('vendors')->where('province','=','BC');
        $quebec = DB::table('vendors')->where('province', '=', 'QC')
                    ->union($bc)
                    ->get();
        return $quebec;
    } 
}