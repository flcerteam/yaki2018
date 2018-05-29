<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class BuffetProduct extends Model
{
    protected $table = "buffet_products";

    public function branches()
	{
		return $this->belongsToMany('App\Models\Client\Branch');
    }
    
    public function firstImage()
	{
		return $this->hasMany('App\Models\Client\BuffetProductImage')->orderBy('order')->first();
	}

	public function ribbon()
	{
		return $this->hasOne('App\Models\Client\Ribbon', 'id', 'ribbon_id');
	}
}
