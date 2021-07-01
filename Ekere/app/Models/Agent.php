<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// class Agent extends Model
class Agent extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = ['agent_name', 'agent_phone_number','agent_email','agent_password','agent_bio','idimage'];
    
    protected $hidden = ['agent_password'];

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
