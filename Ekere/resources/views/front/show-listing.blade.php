@extends('front.layouts.app')

@section('content')

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single"> Property Details Page</h1>
              <span class="color-text-a"> Property details page</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Properties Grid
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="grid-option">
              <form>
                <select class="custom-select">
                  <option selected>All</option>
                  <option value="1">New to Old</option>
                  <option value="2">For Rent</option>
                  <option value="3">For Sale</option>
                </select>
              </form>
            </div>
          </div>
      </div>
    </section><!-- End Property Grid Single-->
</main><!-- End #main -->

<div class="container">
    <div class="row">      
      <div class="col-md-4">
        <div class="card-box-a border">
          <div class="img-box-a">
            {{-- <img src= " {{asset('img/property-10.jpg')}}" alt="" class="img-a img-fluid"> --}}
            <img src="{{asset('img/cameroon-house-1.jpeg')}}" alt="" class="img-a img-fluid" style="width:500px">
            <h4 class="pt-3"><span class="badge badge-success">verified</span></h4>
          </div>
    
          <div class="card-body">
            <div class="row">
              <div class="col-md-6 border-right">
                <h5 class="card-title"> {{$listing->headline}} </h5>
                <p> City | <u class="text-dark"> {{$listing->city_id}} </u></p>
                <p class="card-text"> {{$listing->description}} </p>
              </div> 
              <div class="col-md-6">
                <h4 class="pt-3"><span class="badge badge-success">For {{$listing->operation}} </span></h4>
             
              <p>Agent name: {{$listing->agent_id}} </p>
              </div>
              <div class="price-box d-flex p-3">
                <span class="price-a">rent | CFA {{$listing->price}} </span>
              </div>
              
            </div>
            
            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            <div class="listing-amenities">
              <ul class="card-info d-flex justify-content-around">
                <li>
                  <h4 class="card-info-title"> Palor </h4>
                  <span>{{$listing->palor}} </span>
                </li>
                <li>
                  <h4 class="card-info-title">Bedroom </h4>
                  <span> {{$listing->bedroom}} </span>
                </li>
                <li>
                  <h4 class="card-info-title"> Bathroom </h4>
                  <span>{{$listing->bathroom}}</span>
                </li>
                <li>
                  <h4 class="card-info-title">Kitchen</h4>
                  <span> {{$listing->kitchen}} </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
      <div class="col-md-8 border">
        <p>map will be here</p>


<div id='map' style='width: 1000px; height: 300px;'></div>
<script>
// TO MAKE THE MAP APPEAR YOU MUST
// ADD YOUR ACCESS TOKEN FROM
// https://account.mapbox.com
mapboxgl.accessToken = 'pk.eyJ1IjoiYmVubmRpcCIsImEiOiJjazRtdHVqcmgyZGo0M21xd3ZyM2RucjhtIn0.5FYNvQSOsGYgXP7n_pft5A';
var map = new mapboxgl.Map({
    container: 'map', // container ID
    style: 'mapbox://styles/mapbox/streets-v11', // style URL
    center:  [12.550343, 55.665957], // starting position [lng, lat]
    zoom: 9 // starting zoom
});
// Create a default Marker and add it to the map.
    var marker1 = new mapboxgl.Marker()
    .setLngLat([12.554729, 55.70651])
    .addTo(map);
    
    // Add geolocate control to the map.
    map.addControl(
    new mapboxgl.GeolocateControl({
    positionOptions: {
    enableHighAccuracy: true
    },
    trackUserLocation: true
    })
);


</script>

    </div>
    </div>


</div>


    {{-- <div class="col-sm-12">
      <nav class="pagination-a">
        <ul class="pagination justify-content-center">
          {{ $listings->links() }}            
        </ul>
      </nav>
    </div> --}}


  {{-- <div class="container pt-5">
    <div class="row">
      <div class="col-sm-12">
        <nav class="pagination-a">
          <ul class="pagination justify-content-center">
            {{ $listings->links() }}            
          </ul>
        </nav>
      </div>
    </div>
  </div>  --}}

@endsection