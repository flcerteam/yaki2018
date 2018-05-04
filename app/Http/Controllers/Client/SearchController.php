<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client\Product;
use DB;

class SearchController extends Controller
{
    /**
     * get item by search key word
     */
    public function getSearchResult(Request $req){
        // request model
        $input = $req->all();
        // result by key
        $products = DB::table('products')
                        ->leftJoin('product_images','products.id','=','product_images.product_id')
                        ->leftJoin('units','products.unit_id','=','units.id')
                        ->select('products.*','product_images.name as image','units.name as unit_type')
                        ->where('products.name','LIKE','%'.$input['s'].'%')->paginate(6);
        // total count of product
        $product_count = count(Product::where('name','LIKE','%'.$input['s'].'%')->get());
        // return view
        return view('search.search',compact('products','product_count'));
      }
  
      /**
       * get list product have name like search hint
       */
      public function getSearchHint(Request $req){
        // return list of product have name like key word
        return Product::where('name', 'LIKE', '%'.$req->q.'%')->get();
  
      }
}
