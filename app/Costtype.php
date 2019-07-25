<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costtype extends Model
{
    //
    public function applicationbudgets()
    {
        return $this->hasMany('App\Applicationbudget');
    }
}
