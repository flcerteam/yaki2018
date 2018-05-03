<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client\Product;
use DB;
use Cart;
class MenuController extends Controller
{
   public function getMenu($menu,$id) {
        // get all product
        $products = DB::table('products')
                        ->leftJoin('product_images','products.id','=','product_images.product_id')
                        ->leftJoin('units','products.unit_id','=','units.id')
                        ->join('category_product','category_product.product_id','=','products.id')
                        ->join('category_menu','category_menu.category_id','=','category_product.category_id')
                        ->select('products.*','product_images.name as image','units.name as unit_type')
                        ->where('category_menu.menu_id',$id)
                        ->paginate(6);
        // get sub menu
        $menus = DB::table('menus')
                    ->leftJoin('category_menu','menus.id','=','category_menu.menu_id')
                    ->leftJoin('categories','categories.id','=','category_menu.category_id')
                    ->select('categories.*','category_menu.category_id as categoryId','category_menu.menu_id as menuId')
                    ->where('menus.id',$id)
                    ->get();
        return view('page.thucdon',compact('products','menus'));
    }

   public function getProductType($menuId,$categoryId){
       // get all product
       $products = DB::table('products')
            ->leftJoin('product_images','products.id','=','product_images.product_id')
            ->leftJoin('units','products.unit_id','=','units.id')
            ->leftJoin('category_product','category_product.product_id','=','products.id')
            ->leftJoin('categories','categories.id','=','category_product.category_id')
            ->select('products.*','product_images.name as image','units.name as unit_type')
            ->where('categories.id',$categoryId)
            ->paginate(6);
       $menus = DB::table('menus')
                    ->leftJoin('category_menu','menus.id','=','category_menu.menu_id')
                    ->leftJoin('categories','categories.id','=','category_menu.category_id')
                    ->select('categories.*','category_menu.category_id as categoryId','category_menu.menu_id as menuId')
                    ->where('menus.id',$menuId)
                    ->get();
       return view('page.thucdon',compact('products','menus'));
   }
}
