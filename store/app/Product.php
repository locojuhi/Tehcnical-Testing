<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use SoftDeletes;
    public function store()
    {
        return $this->belongsTo('App\Store');
    }
    protected $dates = ['deleted_at'];
}
