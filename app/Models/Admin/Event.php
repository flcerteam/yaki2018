<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Event extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'events';
    protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'content',
        'image',
        'status',
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
    public static function boot()
    {
        parent::boot();

        static::deleting(function($obj) {
            $disk = config('imagestoreddisk.event');  
            \Storage::disk($disk)->delete($obj->image);
        });
    }

    public function getImageFileExtension($value)
    {
        preg_match("/^data:image\/(.*);base64/i",$value , $match);
        return $match[1];
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

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
    public function setImageAttribute($value)
    {
        $attribute_name = "image";
        $disk = config('imagestoreddisk.event');   
        $destination_path = config('filesystems.disks.events.simple_path');

        // if the image was erased
        if ($value == null) {
            // delete the image from disk
            \Storage::disk($disk)->delete($this->{$attribute_name});

            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }

        // if a base64 was sent, store it in the db
        if (starts_with($value, 'data:image'))
        {
            // 0. Make the image
            $image = \Image::make($value);

            // 1. Generate a filename.
            $filename = md5(uniqid('', true)).'.'.self::getImageFileExtension($value);

            // 2. Store the image on disk.
            \Storage::disk($disk)->put($filename, $image->stream());

            // 3. Save the path to the database
            $this->attributes[$attribute_name] = $destination_path.'/'.$filename;
        }
    }
}
