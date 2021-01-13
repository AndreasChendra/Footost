<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'stores';

    public function review()
    {
        return $this->hasMany(Review::class);
    }
}
