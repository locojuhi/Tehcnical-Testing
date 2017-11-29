<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;

    public function products()
    {
        return $this->hasMany('App\Product');
    }

    protected $fillable = ['name', 'opening_date', 'lat', 'lng'];
    protected $dates = ['deleted_at'];
}
