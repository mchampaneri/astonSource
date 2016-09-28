<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{

    public function scopeAuth($query)
    {
        return $query->where('user_id',\Auth::user()->id);
    }
    public function scopeFacultysubject($query,$user_id,$subject_id)
    {
        return $query->where('user_id',$user_id)->where('subject_id',$subject_id);
    }
}
