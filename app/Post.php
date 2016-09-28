<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function scopeAuth($query)
    {
        return $query->where('user_id',\Auth::user()->id);
    }
}
