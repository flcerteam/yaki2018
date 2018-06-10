<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function menus()
	{
		return $this->belongsToMany('App\Models\Client\Menu', 'category_menu', 'category_id', 'menu_id');
    }

    public function products()
	{
		return $this->belongsToMany('App\Models\Client\Product', 'category_product', 'category_id', 'product_id')->orderBy('order', 'product_id');
    }
}
