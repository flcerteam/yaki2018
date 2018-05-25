<?php

namespace App\Models\Client;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = "members";

    public function getMemberTypeName()
	{
		return $this->hasOne('App\Models\Client\MemberTypes', 'id', 'member_type_id')->first()->name;
    }
}
