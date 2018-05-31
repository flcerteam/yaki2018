<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Client\BuffetProduct;

class BuffetController extends Controller
{
    public static $itemsPerPage = 10;

    function getInfo($name, $id)
    {
        // get all product by branch id        
        $products = BuffetProduct::whereHas('branches', function ($query) use ($id) {
            $query->where('id', '=', $id);
        })->where('status', '=', 0)->paginate(self::$itemsPerPage);

        return view('buffet.buffet', compact('products'));
    }
}
