<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Branch extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'branches';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'description',
        'address',
        'owner',
        'phone_number',
        'email',
        'open_hour',
        'close_hour',
        'location',
        'active',
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
    protected static function boot()
    {
        parent::boot();

        static::deleting(function($model) {
            // Delete branch images
            $disk = 'branches';

            foreach ($model->images as $image) {
                // Delete image from disk
                if (\Storage::disk($disk)->has($image->name)) {
                    \Storage::disk($disk)->delete($image->name);
                }

                // Delete image from db
                $image->delete();
            }
        });
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function images()
    {
        return $this->hasMany('App\Models\BranchImage')->orderBy('order', 'ASC');
    }

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    public function scopeLoadCloneRelations($query)
    {
        $query->with('images');
    }

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }
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
}
