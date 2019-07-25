<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicationbeneficary extends Model
{
    //
    public function callapplication()
    {
        return $this->belongsTo('App\Callapplication');
    }

    public function organisation()
    {
        return $this->belongsTo('App\Organisation');
    }
}
