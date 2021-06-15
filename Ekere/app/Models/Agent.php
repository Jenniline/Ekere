<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['agent_name', 'agent_phone_number','agent_email','agent_password','agent_bio','idimage'];
    public function listings()
    {
        return $this->hasMany('App\Models\Listing');
    }

    public function City()
    {
        return $this->belongsTo('App\Models\City');
    }
    
    public function image()
    {
        return $this->hasOne('App\Models\AgentImage');
    }
    
    
}
