<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Repositories\ProdRepo;
use App\Repositories\VendRepo;

class VendorController extends Controller {
    public function index() {
        $discountMax = 15;

        $vendors 
        = DB::select(
            DB::raw(
            "select vendorName, (discount) AS revenue
            from Vendors
            WHERE discount > :discountMax
            GROUP By vendorName"),  
            // Pass the variable value to the SQL query.
            (array('discountMax' => DB::table('vendors')->average('discount')   
        )));
        return view('vendor/index',['vendors' => $vendors]);
    }   
    

}

