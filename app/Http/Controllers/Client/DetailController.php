<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class DetailController extends Controller
{
    public function getDetail($id){
        // get all product
        $item = DB::table('products')
        ->leftJoin('product_images','products.id','=','product_images.product_id')
        ->leftJoin('units','products.unit_id','=','units.id')
        ->select('products.*','product_images.name as image','units.name as unit_type')
        ->where('products.id',$id)
        ->first();
        return view('detail.productDetail',compact('item'));
    }
}
