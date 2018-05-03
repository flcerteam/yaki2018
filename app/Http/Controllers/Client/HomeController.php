<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;
use App\Models\Client\Event;
use DB;

class HomeController extends Controller
{
    public function getHomeData(){
        // get all event
        $events = Event::all();
        // get new product
        $products = DB::table('products')
        ->leftJoin('product_images','products.id','=','product_images.product_id')
        ->select('products.*','product_images.name as image')
        ->get();
        return view('page.trangchu',compact('events','products'));
    }
}
