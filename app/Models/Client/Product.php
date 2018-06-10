<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function categories()
	{
		return $this->belongsToMany('App\Models\Client\Category', 'category_product', 'product_id', 'category_id');
    }
    
    public function unit()
	{
		return $this->hasOne('App\Models\Client\Unit', 'id', 'unit_id');
	}
    
    public function firstImage()
	{
		return $this->hasMany('App\Models\Client\ProductImage')->orderBy('order')->first();
	}

	public function ribbon()
	{
		return $this->hasOne('App\Models\Client\Ribbon', 'id', 'ribbon_id');
	}
}
