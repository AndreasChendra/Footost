<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'place_of_birth', 'date_of_birth', 'phone_number', 'gender', 'img_profile', 'role_id', 'vip_expired',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function transaction()
    {
        return $this->hasMany('App\Transaction');
    }

    public function review()
    {
        return $this->hasMany('App\Review');
    }

    public function store()
    {
        return $this->hasMany('App\Store');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }
}
