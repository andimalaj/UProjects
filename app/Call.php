<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    //

    protected $fillable = ['status'];

    public function applications()
    {
        return $this->hasMany('App\Callapplication');
    }

    public function activeOptions()
    {
        return [
            1 => 'Active',
            0 => 'Inactive',
        ];
    }
}
