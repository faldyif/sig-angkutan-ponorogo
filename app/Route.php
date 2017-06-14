<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function driver()
    {
        return $this->hasMany('App\Driver');
    }
}
