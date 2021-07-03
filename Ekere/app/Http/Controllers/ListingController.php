<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\ListingImage;
use App\Models\City;


class ListingController extends Controller
{
    public function listingsindex()
    {
      $listings = Listing::paginate(12);
      // $listings = Listing::all();
      return view('front.property')
            ->with('listings', $listings);
    }
    
    public function createlisting()
    {
      $cities = City::all();
      return view('front.create-a-listing')->with('cities',$cities);
    }

    public function storeListing(Request $request)
    {

       $listing = new Listing;
       $listing->description = $request->description;
       $listing->headline = $request->headline;
       $listing->bedroom = $request->bedroom;
       $listing->bathroom = $request->bathroom; 
       $listing->palor = $request->palor; 
       $listing->kitchen = $request->kitchen; 
       $listing->price = $request->price; 
       $listing->city_id = $request->city_id; //city_id
       $listing->latitude = !empty($input['latitude']) ? $input['latitude'] : null;
       $listing->longitude = !empty($input['longitude']) ? $input['longitude'] : null;
      //  $listing->created_by = $request->user()->id;
       $listing->status = 1;
       $listing->save(); 
  
      return response()->json([
        "success"=>true,
        "message"=> "Listing stored successfully"
    ], 200);

    }
}
