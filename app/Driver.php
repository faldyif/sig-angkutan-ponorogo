<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    public function route()
    {
        return $this->belongsTo('App\Route');
    }
}
