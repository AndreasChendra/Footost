<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
        'title', 'description', 'termncon', 'end_date',
    ];

    public $timestamps = false;
}
