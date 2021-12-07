<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Masjid extends  Authenticatable
{
    protected $guard = 'masjid';
    protected $primaryKey = 'id';

    protected $fillable = [
        'email', 'password','name','phone','city','state','address','imam',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function requests(){
        return $this->hasMany(MasjidRequest::class);
    }
}
