@extends('front.layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<br>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="card " style="width: 50rem;">
            <img class="card-img-top" src=" {{ asset('img/listing-successful.png')}}" alt="Card image cap" width="500px" height="500px">
            <div class="card-body">
        
              <h1 class="card-title text-success">We have sent your request to the agent <br> who created this listing </h1>
              <h3 class="text-success">Expect reply anytime soon</h3>
        
              <p class="card-text">  </p>
              {{-- <a href=" " class="btn btn-success"></a> --}}
            </div>
        </div>
    </div>
</div>


@endsection