<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Callapplication extends Model
{
    //
    public function call()
    {
        return $this->belongsTo('App\Call');
    }

    public function organisation()
    {
        return $this->belongsTo('App\Organisation');
    }

    public function applicationbeneficaries()
    {
        return $this->hasMany('App\Applicationbeneficary');
    }
    public function applicationcomponent()
    {
        return $this->hasOne('App\Applicationcomponent');
    }
    public function applicationbudget()
    {
        return $this->hasOne('App\Applicationbudget');
    }



}
