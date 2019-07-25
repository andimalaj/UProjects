<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicationcomponent extends Model
{
    //
    public function callapplication()
    {
        return $this->belongsTo('App\Callapplication');
    }
}
