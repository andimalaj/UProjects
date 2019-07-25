<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicationbudget extends Model
{
    //
    public function callapplication()
    {
        return $this->belongsTo('App\Callapplication');
    }
    public function costtype()
    {
        return $this->belongsTo('App\Costtype');
    }
}
