<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class ServiceProvider extends Authenticatable
{
    protected $guard = 'serviceprovider';
    protected $primaryKey = 'id';

    protected $fillable = [
        'email', 'password','name','state','phone','nic','city','speciality','class'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
