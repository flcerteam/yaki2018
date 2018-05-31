<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client\Product;
use App\Models\Client\Menu;

class MenuController extends Controller
{
    public static $itemsPerPage = 10;

    public function getMenu($menu, $id)
    {
        // get all product by menu id        
        $products = Product::whereHas('categories.menus', function ($query) use ($id) {
            $query->where('id', '=', $id);
        })->where('status', '=', 0)->paginate(self::$itemsPerPage);
                        
        // get sub menu
        $menu = Menu::where('id', '=', $id)->first();

        return view('page.thucdon',compact('products','menu'));
    }

    public function getProductType($name, $menuId, $categoryId)
    {
        // get all product by category id
        $products = Product::whereHas('categories', function ($query) use ($categoryId) {
            $query->where('id', '=', $categoryId);
        })->where('status', '=', 0)->paginate(self::$itemsPerPage);

        // get sub menu 
        $menu = Menu::where('id', '=', $menuId)->first();

        return view('page.thucdon', compact('products', 'menu'));
    }
}
