<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client\Product;

class DetailController extends Controller
{
    public function getDetail($name, $id) {

        // get product info
        $item = Product::where('id', '=', $id)->first();
            
        return view('detail.productDetail', compact('item'));
    }
}
