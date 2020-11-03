<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductsController extends Controller
{
    //
    public function index(){
//    	$products =[0=>["name"=>"Iphone", "category"=>"SmartPhones", "prices"=>1000]];

    	//$products = DB::table('products')->get();
    	$products = Product::all();
    	return view("allproducts", compact("products"));
    }
}