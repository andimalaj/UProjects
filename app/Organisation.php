<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    //
    public function applications()
    {
        return $this->hasMany('App\Callapplication');
    }
    public function applicationbeneficaries()
    {
        return $this->hasMany('App\Applicationbeneficary');
    }
}
