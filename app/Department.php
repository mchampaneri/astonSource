<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function faculties()
    {
        return $this->hasMany('App\User')->wherein('role',[2,3]);
    }

    public function students()
    {
        return $this->hasMany('App\User')->where('role',4);
    }

    public function persons()
    {
        return $this->hasMany('App\User');
    }

    public static  function Name($id)
    {
        return Department::find($id)->name;
    }

    public function hod()
    {
        if($this->hod_id != 0)
        return $this->hasOne('App\User')->where('id',$this->hod_id)->first()->name;
        else {
          return 'No Hod Assigned';
        }
    }
}
