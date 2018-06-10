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
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'reservation_no',
        'member_id',
        'branch_id',
        'rt_type_id',
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
        return $this->belongsTo('App\Models\Admin\Member');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Admin\Branch');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\Admin\RtType', 'rt_type_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Models\Admin\RtStatus', 'status_id');
    }

    public function rtStatusHistories()
    {
        return $this->hasMany('App\Models\Admin\RtStatusHistory', 'rt_id', 'id')->orderBy('created_at', 'DESC');
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
        if (null != $value)
        {
            return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d-m-Y H:i:s');
        }

        return $value;
    }

    public function getReservationDateFmAttribute()
    {
        if (null != $this->reservation_date)
        {
            return \Carbon\Carbon::createFromFormat('Y-m-d', $this->reservation_date)->format('d-m-Y');
        }

        return $this->reservation_date;
    }
}
