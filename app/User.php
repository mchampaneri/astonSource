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

    public function student()
    {
        return $this->hasOne('App\Student')->first();
    }

    public function faculty()
    {
            return $this->hasOne('App\Faculty')->first();
    }
//////////////// Redudant /////////////////////////////
//    public function asStudent()
//    {
//        return $this->hasOne('App\Student')->first();
//    }

//    public function AsFaculty()
//    {
//        return $this->hasOne('App\Faculty')->first();
//    }
////////////////////////////////////////////////
    public static function Name($id)
    {
        $user = User::find($id);
        if($user->role=="student")
            return $user->hasOne('App\Student')->first()->name;
        if($user->role=="faculty")
            return $user->hasOne('App\Faculty')->first()->name;

    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function lectures()
    {
        return $this->hasMany('App\Lecture');
    }

    public  function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }

}
