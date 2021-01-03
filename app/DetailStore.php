<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailStore extends Model
{
    protected $table = 'detail_stores';

    public function store()
    {
        return $this->belongsTo('App\Store');
    }
}
