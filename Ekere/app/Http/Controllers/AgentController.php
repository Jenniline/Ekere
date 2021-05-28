<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\City;


class AgentController extends Controller
{
    public function agentsindex()
    {
      $agents = Agent::paginate(12);
    //   $agents = Agent::all();

    //   $cities = City::all();
      return view('front.agents-index')
              ->with('agents', $agents);
            //   ->with('cities', $cities);
    }

    public function signUpAgentForm()
    {
      $cities = City::all();
      return view('front.sign-up-agent')
              ->with('cities', $cities);
    }
}
