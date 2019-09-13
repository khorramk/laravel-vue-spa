<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achievment extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
