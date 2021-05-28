<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;


class ListingController extends Controller
{
    public function listingsindex()
    {
      $listings = Listing::paginate(12);
      // $listings = Listing::all();
      return view('front.property')
              ->with('listings', $listings);
    }
}
