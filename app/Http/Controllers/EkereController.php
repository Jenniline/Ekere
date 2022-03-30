<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agent;
use App\Models\Listing;
use App\Models\ListingImage;
use App\Models\Client;


class EkereController extends Controller
{
    public function index()
    {
      $listings = Listing::all();
      return view('front.index')
              ->with('listings', $listings);
    }

    public function agentsindex()
    {
    //   $agents = Agent::paginate(12);
      $agents = Agent::all();
      return view('front.agents-index')
              ->with('agents', $agents);
    }
    
    public function singleagent()
    {
      return view('front.single-agent');

    }
    public function contact()
    {
      return view('front.contact');

    }
    public function signUpAgentForm()
    {
      return view('front.sign-up-agent');

    }
}
