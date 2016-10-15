<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User')->first();
    }

  


}
