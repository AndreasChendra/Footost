<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }
}
