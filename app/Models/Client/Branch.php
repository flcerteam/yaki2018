<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = "branches";

    public static function allActive()
    {
        return Branch::where('status', 0) -> orderBy('id', 'ASC') -> get();
    }

    public static function infoBySlug($slug)
    {
        return Branch::where('slug', $slug) -> first();
    }

    public function firstImage()
    {
        return $this->hasMany('App\Models\Client\BranchImage')->orderBy('order', 'ASC') -> first();
    }
}
