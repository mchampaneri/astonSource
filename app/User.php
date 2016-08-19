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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function asSudent()
    {
        if(\Auth::user()->role=="student")
        return $this->hasOne('App\Student');
        else
            return [];
    }

    public function asFaculty()
    {
        if(\Auth::user()->role=="student")
            return $this->hasOne('App\Student');
        else
            return [];
    }
}
