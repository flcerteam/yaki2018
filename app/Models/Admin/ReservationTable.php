<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class ReservationTable extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'reservation_tables';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'reservation_no',
        'member_id',
        'branch_id',
        'reservation_type',
        'reservation_date',
        'reservation_hour',
        'number_of_people',
        'note',
        'status_id',
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
    public function member()
    {
        return $this->hasOne('App\Models\Admin\Member', 'id', 'member_id');
    }

    public function branch()
    {
        return $this->hasOne('App\Models\Admin\Branch', 'id', 'branch_id');
    }

    public function status()
    {
        return $this->hasOne('App\Models\Admin\RtStatus', 'id', 'status_id');
    }

    public function rtStatusHistories()
    {
        return $this->hasMany('App\Models\Admin\RtStatusHistory')->orderBy('created_at', 'DESC');
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
