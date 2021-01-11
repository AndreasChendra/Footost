<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function store()
    {
        return $this->hasMany('App\Store');
    }
}
