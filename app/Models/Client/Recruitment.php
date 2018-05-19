<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model
{
    
    protected $table = "recruitments";

    public function getCreatedAtAttribute($value)
    {
        if (null != $value)
        {
            return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d/m/Y');
        }

        return $value;
    }
}
