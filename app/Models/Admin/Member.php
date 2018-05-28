<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Member extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'members';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'birth_date',
        'gender',
        'phone_number',
        'email',
        'address',
        'member_point',
        'member_type_id',
        'note',
        'created_at',
    	'updated_at'
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function memberType()
	{
		return $this->belongsTo('App\Models\Admin\MemberType');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function getBirthDateFmAttribute()
    {
        if (null != $this->birth_date)
        {
            return \Carbon\Carbon::createFromFormat('Y-m-d', $this->birth_date)->format('d-m-Y');
        }

        return $this->birth_date;
    }
    // public function getBirthDateAttribute($value)
    // {
    //     if ($value != null)
    //     {
    //         return \Carbon\Carbon::createFromFormat('Y-m-d', $value)->format('d-m-Y');
    //     }

    //     return $value;
    // }
}
