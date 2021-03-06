<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\ListingImage;
use App\Models\City;
use App\Models\Agent;
use Illuminate\Support\Facades\Mail;
use App\Mail\ListingCreatedMail;
use App\Mail\InterestedClientMail;


class ListingController extends Controller
{
    public function listingsindex()
    {
      $listings = Listing::paginate(12);
      $agents = Agent::all();
      // $listingImage = []
      // $listings = Listing::all();
      return view('front.listing-index')
            ->with('listings', $listings)
            ->with( 'agents',$agents);
          
    }
    
    public function createlisting()
    {
      $cities = City::all();
      $agents = Agent::all();
      return view('front.create-listing')
            ->with('cities',$cities)
            ->with( 'agents',$agents);
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
        $listing->agent_id = auth()->user()->id;

       //  Ask Boss about latitude and longitude
        $listing->latitude = $request->inputlatitude;
        $listing->longitude = $request->inputlongitude;
       //  $listing->created_by = $request->user()->id;
       $listing->status = 1;
 
       $input =  $request->file();
       $images = $input['image'];
       $path = $request->file('image')->store('public/agentImages');
       $exploded_string = explode("public",$path);
       $listing->image = asset("storage".$exploded_string[1]);
       $listing->save();

       if (auth()->user()->email) {
        Mail::to(auth()->user()->email)->send(new ListingCreatedMail($listing));
       }
  
      //  return response()->json([
      //   "success"=>true,
      //   "message"=> "Listing stored successfully"
      // ], 200);
      return view('front.listing-successful');
   

      // return redirect()->back()
      // ->with('success', 'Created successfully!');

      // Image code begins here 

      // if($request->hasFile('listingimageone')) {
      //   $listingimageone = $request->listingimageone;
      //   $path = $request->file('listingimageone')->store('public/listingImages');

      //   $exploded_string = explode("public", $path);
      //   $listingimageone = asset("storage{$exploded_string[1]}");
      //   $indexone = $exploded_string[1];
        
      //   explode("listingImages", $indexone);
      //   $listingimage = new ListingImage;
      //   $listingimage->listing_id = $listing->id;
      //   $listingimage->path = "/storage";
      //   $listingimage->name = $listing->headline." image";
      //   $listingimage->url = "/storage/listingImages";
      //   $listingimage->listingimageone = $listingimageone;

      //   $listingimage->save();
      // }



      // return response()->json([
      //   "success"=>true,
      //   "message"=> "Listing stored successfully"
      // ], 200);
  }
  public function showListing($id)
    {
    $listing=Listing::find($id);
    return view('front.show-listing')
            ->with('listing', $listing);  
  } 

  public function interestedClient($id)
  {
    $client = auth()->user()->name;
    $listing=Listing::find($id);

    if (auth()->user()->email) {
      Mail::to(auth()->user()->email)->send(new InterestedClientMail($listing));
     }
    return view('front.interested_client_request')
                  ->with('listing', $listing);  
    
  }

}
