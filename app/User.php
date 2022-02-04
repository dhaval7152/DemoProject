<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    // password encryot

    // public function SetPasswordAttribute($password)
    // {
    //     $this->attributes['password']=
    //     bcrypt($password);
    // }

        public function getNameAttribute($name){
            return "my name is ".ucfirst($name);
        }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];
}
