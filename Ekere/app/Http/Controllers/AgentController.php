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
    
    public function storeAgent(Request $request)
    {
      //  print_r($request->input());
      //  $this->validate($request,[
      //    'agent_name' => 'required',
      //    'agent_phone_number' => 'required', //check from,
      //    'agent_email' => 'required',
      //    'agent_password' => 'required|min:6',
      //   //  'type-of-agent' => 'required',
      //   //  'city_id' => 'required',
      //   //  'ID-image' => 'required',
      //    'bio' => 'required',
      //  ]);

         
       $agent = new Agent;
       $agent->name = $request->agent_name;
       $agent->phone_number = $request->agent_phone_number;
       $agent->email = $request->agent_email;
       $agent->password = $request->agent_password;
       $agent->bio = $request->agent_bio;

      //  $agent->city_id = $request->city_id;
       $agent->save();


      //  now get the ID image and get life photo image

      return redirect()->route('front.agent_success')->with('agent',$agent);


    }


}
