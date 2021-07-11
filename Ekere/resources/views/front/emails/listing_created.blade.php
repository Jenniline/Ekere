@component('mail::message')
# Order Created

Hi {{ $agent->name }},
Your agent ID is {{$listing->agent_id}}


# Your Listing was created succesfully. 

Find bellow a summary of the listing you created

<img src="{{ $listing->image }}" alt="" class="img-a img-fluid" style="width:500px">

# {{$listing->headline}} 
# {{$listing->city_id}} 
# {{$listing->description}} 




# For {{$listing->operation}}
# rent | CFA {{$listing->price}} 

  



@component('mail::button', ['url' => ''])
Keep your eyes out for clients who are interested in your listing
@endcomponent


@endcomponent
























