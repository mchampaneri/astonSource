<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function faculties()
    {
        return $this->hasMany('App\Faculty')->get();
    }

    public static  function Name($id)
    {
        return Department::find($id)->name;
    }
}
