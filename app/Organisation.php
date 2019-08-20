<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisation extends Model
{
    //

    protected $fillable = ['status'];

    public function applications()
    {
        return $this->hasMany('App\Callapplication');
    }
    public function applicationbeneficaries()
    {
        return $this->hasMany('App\Applicationbeneficary');
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
        ];
    }
}
