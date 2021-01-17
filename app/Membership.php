<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    protected $table = 'memberships';

    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }
}
