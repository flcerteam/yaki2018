<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;
use App\Models\Client\Event;
use App\Models\Client\Parameter;
use DB;

class HomeController extends Controller
{
    public function getHomeData() {

        $imgSrc  = config('filesystems.disks.image.simple_path');
        // get all event
        $events = Event::all();

        // get about
        $parameter = Parameter::where('param_id','YAKI_ABOUT')->first();

        if (null != $parameter) {
            $parameter->content = nl2br($parameter->content);
        }

        // get new product
        $products = DB::table('products')
        ->leftJoin('product_images','products.id','=','product_images.product_id')
        ->select('products.*','product_images.name as image')
        ->get();

        return view('page.trangchu',compact('events','products','parameter','imgSrc'));
    }
}
