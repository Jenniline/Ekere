<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function agents()
    {
        return $this->hasMany('App\Models\Agent');
    }
    public function listings()
    {
        return $this->hasMany('App\Models\Listing');
    }
}
