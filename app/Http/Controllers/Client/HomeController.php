<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Menu;
use App\Models\Client\Event;
use App\Models\Client\Parameter;
use App\Models\Client\Product;
use App\Models\Client\Category;
use DB;

class HomeController extends Controller
{
    public function getHomeData() {

        // get all event
        $events = Event::where('status','0')->get();

        // get about
        $paramAbout = Parameter::where('param_id', 'YAKI_ABOUT_HOME')->first();

        if (null != $paramAbout) {
            $paramAbout->content = nl2br($paramAbout->content);
        }

        // get product
        $paramCategoryHome = Parameter::where('param_id', 'YK_CAT_DISP_HOME')->first();
        $products = null;
        
        if (null != $paramCategoryHome) {

            $categoryCd = $paramCategoryHome->content;
            $category = Category::where('cid', $categoryCd)->first();

            if (null != $category)
            {
                $categoryId = $category->id;

                // get all product by category id
                $products = Product::whereHas('categories', function ($query) use ($categoryId) {
                    $query->where('id', '=', $categoryId);
                })->get();
            }
        } else {

            // get all product
            $products = Product::all();
        }

        return view('page.trangchu',compact('events', 'paramAbout', 'paramCategoryHome', 'products'));
    }
}
