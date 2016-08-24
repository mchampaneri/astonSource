<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    public function questions()
    {
        return $this->hasMany('App\Question');
    }

    public function myAnswers()
    {
        return $this->hasMany('App\Answer');
    }

}
