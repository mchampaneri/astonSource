<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User')->first();
    }

    public  function subjects()
    {
        return $this->belongsToMany('App\Subject');
    }

  
    public static function Name($id)
    {
      return Faculty::find($id)->name;
    }
}
