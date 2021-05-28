<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    public function Agent()
    {
        return $this->belongsTo('App\Models\Agent');
    }
    public function City()
    {
        return $this->belongsTo('App\Models\City');
    }
}
