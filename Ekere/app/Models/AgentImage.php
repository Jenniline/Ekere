<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgentImage extends Model
{
    public function agent()
    {
        return $this->belongsTo('App\Models\Agent');
    }
}
