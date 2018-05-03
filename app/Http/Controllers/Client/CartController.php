<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Cart;
use App\Models\Client\Product;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function addToCart(Request $req) {
        // get request value
        $input =$req->all();
        // find product by id
        $itemInfo = Product::find($input['id']);
        // create product info add to cart
        $cartInfo= [
            'id' => ($itemInfo->id),
            'name' => ($itemInfo->name),
            'qty' => $input['qty'],
            'price' => ($itemInfo->price)
        ];    
        Cart::add($cartInfo);
        // add to cart
        $cart = Cart::content();
        $totalQty =Cart::count();
        return response()->json(['totalQty'=>$totalQty]);
    }
}
