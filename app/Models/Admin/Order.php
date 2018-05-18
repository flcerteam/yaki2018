<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Order extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'orders';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'member_id',
        'status_id',
        'shipping_address',
        'billing_address',
        'comment',
        'invoice_no',
        'invoice_date',
        'delivery_date',
        'total_discount',
        'total_shipping',
        'total',
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
    public function total()
    {
        return number_format((float)$this->total, 0, ',', '.');
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function member()
    {
        return $this->hasOne('App\Models\Admin\Member', 'id', 'member_id');
    }

    public function status()
    {
        return $this->hasOne('App\Models\Admin\OrderStatus', 'id', 'status_id');
    }

    public function orderStatusHistories()
    {
        return $this->hasMany('App\Models\Admin\OrderStatusHistory', 'order_id', 'id')->orderBy('created_at', 'DESC');
    }

    public function details()
    {
        return $this->hasMany('App\Models\Admin\OrderDetail', 'order_id', 'id');
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

    public function getInvoiceDateAttribute($value)
    {
        if (null != $value)
        {
            return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d-m-Y H:i:s');
        }

        return $value;
    }

    public function getDeliveryDateAttribute($value)
    {
        if (null != $value)
        {
            return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d-m-Y H:i:s');
        }

        return $value;
    }
}
