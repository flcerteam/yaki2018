<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";

    public function categories()
	{
		return $this->belongsToMany('App\Models\Client\Category', 'category_menu', 'menu_id', 'category_id')->orderBy('order');
	}
}
