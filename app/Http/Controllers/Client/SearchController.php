<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client\Product;
use DB;

class SearchController extends Controller
{
  public static $itemsPerPage = 10;
    /**
     * get item by search key word
     */
    public function getSearchResult(Request $req){
        // request model
        $input = $req->all();
        // result by key
        $products = Product::where('name','LIKE','%'.$input['s'].'%')->paginate(self::$itemsPerPage);
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
