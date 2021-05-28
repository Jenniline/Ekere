<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;


class AgentController extends Controller
{
    public function agentsindex()
    {
      $agents = Agent::paginate(12);
    //   $agents = Agent::all();
      return view('front.agents-index')
              ->with('agents', $agents);
    }
}
