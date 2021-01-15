<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id', 'payment_id', 'membership_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function membership()
    {
        return $this->belongsTo('App\Membership');
    }

    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }
}
