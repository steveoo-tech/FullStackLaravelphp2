<?php 
namespace App\Http\Controllers;
use App\Repositories\ProdRepo;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {
    public function index() {
        $products 
            = DB::select( 
                DB::raw("
                select manufacturer, sum(quantity*price)  AS revenue
                from Products
                WHERE price > :priceMin
                GROUP By manufacturer"), 
                    array('priceMin' => DB::table('products')->average('price')   
                ));  
            return view('home/index',['products' => $products]);
    }   
}