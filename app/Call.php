<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    //

    public function applications()
    {
        return $this->hasMany('App\Callapplication');
    }
}
