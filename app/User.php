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
        'name', 'email', 'password','role','state'
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

    public function scopeInactive($query)
    {
        return $query->where('department_id',\Auth::user()->department_id)
                ->where('state',0);
    }

    public function scopeDepartment($query, $department_id)
    {
        return $query->where('department_id', $department_id)
            ->get();
    }

    public static function  RoleMap($number)
    {
        switch($number)
            {
            case 1:
            return 'admin';
            break;
            case 2:
            return 'faculty';
            break;
            case 3:
            return  'faculty';
            break;
            case 4:
            return  'student';
            break;
            default:
            return none;

            }

    }

    public function scopeStudents($query)
    {
        return $query->where('role','4');
    }

    public function scopeFaculties($query)
    {
        return $query->wherein('role',['3','2']);
    }

    public static function Name($id)
    {
        return User::find($id)->name;
    }
}
