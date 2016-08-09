<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assingment extends Model
{
    public  function  questions()
    {
        return $this->hasMany('App\Question');
    }
}
