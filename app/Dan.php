<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Dan extends Model
{
    protected $table='dans';
    protected $primaryKey='id';

    protected $fillable = [
        'id', 'name'
    ];
    public $incrementing = false;
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // $model->{$model->getKeyName()} === '' || is_null($model->{$model->getKeyName()})
            //if uuid is supplied and is a valid format use it
            if(preg_match('/^[0-9A-F]{8}-[0-9A-F]{4}-4[0-9A-F]{3}-[89AB][0-9A-F]{3}-[0-9A-F]{12}$/i',
                    $model->{$model->getKeyName()}) !== 1)
            {
                //generate a valid uuid
                $model->{$model->getKeyName()} = Uuid::generate()->string;
            }
        });
    }
}
