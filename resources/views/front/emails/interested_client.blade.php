@component('mail::message')
# Request for Listing 

Hi {{ $agent->name }},
Your agent ID is {{$listing->agent_id}}

# {{auth()->user()->name}}  is interested in your property

# The Id of your property is {{$listing->id}}



# Your Listing was created succesfully. 

Find bellow a summary of the listing you created

<img src="{{ $listing->image }}" alt="" class="img-a img-fluid" style="width:500px">

# {{$listing->headline}} 
# {{$listing->city_id}} 
# {{$listing->description}} 




# For {{$listing->operation}}
# rent | CFA {{$listing->price}} 

  



@component('mail::button', ['url' => route('show-listing', [$listing->id])])
This is the link to the listing
@endcomponent


@endcomponent
























