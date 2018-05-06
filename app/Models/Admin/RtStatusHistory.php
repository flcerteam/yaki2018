<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class RtStatusHistory extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'rt_status_histories';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'rt_id',
        'status'
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
    public function status()
	{
		return $this->hasOne('App\Models\Admin\RtStatus', 'id', 'status');
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
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d-m-Y H:i:s');
    }
}
