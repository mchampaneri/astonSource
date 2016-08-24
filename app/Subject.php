<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public  function faculties()
    {
        return $this->belongsToMany('App\Faculty');
    }

    public static function Name($id)
    {
        return Subject::find($id)->name;

    }
}
