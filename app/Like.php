<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function likes ()
    {
       return $this->hasMany('App\Like', 'post_id');
    }
}
