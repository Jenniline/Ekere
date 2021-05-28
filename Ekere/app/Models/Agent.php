<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    public function listings()
    {
        return $this->hasMany('App\Models\Listing');
    }

    public function City()
    {
        return $this->belongsTo('App\Models\City');
    }
    
    
}
