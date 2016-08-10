<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }
}
