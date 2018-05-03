<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client\Product;
use DB;
use Cart;
class MenuController extends Controller
{
    function getMenu() {
        
        // get all product
        $products = DB::table('products')
                        ->leftJoin('product_images','products.id','=','product_images.product_id')
                        ->leftJoin('units','products.unit_id','=','units.id')
                        ->select('products.*','product_images.name as image','units.name as unit_type')
                        ->paginate(6);
        return view('page.thucdon',compact('products'));
    }
}
