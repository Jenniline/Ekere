<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EkereController extends Controller
{
    public function index()
    {
      return view('front.index');

    }
    public function listings()
    {
      return view('front.property');

    }
    public function agentsindex()
    {
      return view('front.agents-index');

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
