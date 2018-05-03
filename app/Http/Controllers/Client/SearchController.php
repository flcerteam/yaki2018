<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Models\Client\Product;

class SearchController extends Controller
{
    /**
     * get item by search key word
     */
    public function getSearchResult(Request $req){
        // request model
        $input = $req->all();
        // result by key
        $product_by_name = Product::where('name','LIKE','%'.$input['s'].'%')->paginate(10);
        // total count of product
        $product_count = count(Product::where('name','LIKE','%'.$input['s'].'%')->get());
        // return view
        return view('page.search',compact('product_by_name','product_count'));
      }
  
      /**
       * get list product have name like search hint
       */
      public function getSearchHint(Request $req){
        // return list of product have name like key word
        return Product::where('name', 'LIKE', '%'.$req->q.'%')->get();
  
      }
}
