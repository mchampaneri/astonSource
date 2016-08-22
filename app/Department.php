<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function faculties()
    {
        return $this->hasMany('App\Faculty')->get();
    }
}
