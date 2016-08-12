<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function assingment()
    {
        return $this->belongsTo('App\Assingment');
    }

    public function answer()
    {
        return $this->hasMany('App\Answer')->where('student_id',\Auth::user()->asStudent()->first()->id)->first();

    }
    public function isAnswered()
    {

        return $this->hasMany('App\Answer')->where('student_id',\Auth::user()->asStudent()->first()->id)
                        ->exists() ? true:false;
    }
}
