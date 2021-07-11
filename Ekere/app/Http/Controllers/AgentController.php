<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\AgentImage;
use App\Models\City;


class AgentController extends Controller
{

  public function __construct()
    {
        $this->middleware(['auth','verified']);
    }
  
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
    
    public function agentRulesModal()
    {
      return view('front.agent_rules_modal');
    }

    public function agentJenn()
    {
      return view('front.agent_jenn');
    }

    public function storeAgent(Request $request)
    {
      //  print_r($request->input());
      //  $this->validate($request,[
      //    'agent_phone_number' => 'required', //check from,
      //   //  'agent_email' => 'required',
      //   //  'agent_password' => 'required|min:6',
      //     // 'type-of-agent' => 'required',
      //     // 'city_id' => 'required',
      //   //  'ID-image' => 'required',
      //    'bio' => 'required',
      //  ]);     'agent_name' => 'required',
    
    
      // dd($request->all());
      $agent = new Agent;
      $agent->name = $request->agent_name;
      $agent->phone_number = $request->agent_phone_number;
      $agent->email = $request->agent_email;
      $agent->password = $request->agent_password;
      $agent->bio = $request->agent_bio;
      $agent->type = $request->type_of_agent;
      $agent->gender = $request->gender;
      $agent->city_id = $request->city_id;

      $input =  $request->file();
      $images = $input['image'];
      $path = $request->file('image')->store('public/agentImages');
      $exploded_string = explode("public",$path);
      $agent->image = asset("storage".$exploded_string[1]);
      $agent->save();

      // if($request->hasFile('idimage')) {
      //   $idimage = $request->idimage;
      //   $path = $request->file('idimage')->store('public/agentImages');
      //   $exploded_string = explode("public", $path);
      //   $ID_CARD_Image = asset("storage{$exploded_string[1]}");
      //   $indexone = $exploded_string[1];

      //   explode("agentImages", $indexone);
      //   $agentimage = new AgentImage;
      //   $agentimage->agent_id = $agent->id;
      //   $agentimage->path = "/storage";
      //   $agentimage->ID_CARD_Image = $ID_CARD_Image;
      //   $agentimage->save();
      // }   


      return view('front.agent-successful');

    //   return response()->json([
    //     "success"=>true,
    //     "message"=> "Agent stored successfully"
    // ], 200);

    }

         // show
    public function showAgent($id)
    {
    $agent=Agent::find($id);
    return view('front.show-agent')
            ->with('agent', $agent);
    } 
}
