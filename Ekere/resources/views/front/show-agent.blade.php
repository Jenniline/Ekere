@extends('front.layouts.app')

@section('content')

<main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <i id="icons" class="fa fa-check-circle fa-2x"> verified agent</i>
              <h1 class="title-single">{{$agent->name}}</h1>  
              <span class="color-text-a">real estate agent</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Agents</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                 {{$agent->name}}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single -->

    <!-- ======= Agent Single ======= -->
    <section class="agent-single">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-md-6">
                <div class="agent-avatar-box">
                  <img src= "{{asset('img/cameroon-agent-1.jpeg')}}" alt="" class="agent-avatar img-fluid">
                </div>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="agent-info-box">
                  <div class="agent-title">
                    <div class="title-box-d">
                      <h3 class="title-d">{{$agent->name}}
                      </h3>
                    </div>
                  </div>
                  <div class="agent-content mb-3">
                    <p class="content-d color-text-a">
                      <strong>My Bio: </strong>
                    Hi, My name is {{$agent->name}}. I am a realtor (real estate agent). {{$agent->bio}}
                    </p>
                    <p>
                      <strong>I am a real estate agent in: </strong>
                      <span class="color-text-a"> {{$agent->city_id}}  </span>
                    </p>

                    <div class="info-agents color-a">
                      <p>
                        <strong>Phone: </strong>
                        <span class="color-text-a"> {{$agent->phone_number}} <i id="icons" class="fa fa-check-circle fa-2x"> verified</i> </span>
                      </p>
                      
                      <p>
                        <strong>Email: </strong>
                        <span class="color-text-a">{{$agent->email}}  <i id="icons" class="fa fa-check-circle fa-2x"> verified</i> </span>
                      </p>
                      <p>
                        <strong>Agent Type: </strong>
                        <span class="color-text-a"> {{$agent->type}}  </span>
                      </p>
                      <p>
                        <strong>Gender: </strong>
                        <span class="color-text-a"> {{$agent->gender}}  </span>
                      </p>
                      <p>
                        <strong>Status: </strong>
                        <span class="color-text-a"> {{$agent->status}}  </span>
                      </p>
                      <p>
                        <strong>Created Account On the: </strong>
                        <span class="color-text-a"> {{$agent->created_at}}  </span>
                      </p>
                      <p>
                        <strong>Account Approved On the: </strong> 
                        <span class="color-text-a"> {{$agent->updated_at}}  </span>
                        Must be after 3 days
                      </p>
                      <i class="fa fa-times"></i>
                     
                    </div>
                  </div>
                  <div class="socials-footer p-4">
                    <h3 class="p-2">Follow me on Social media</h3>

                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-facebook fa-2x" aria-hidden="true"></i> 
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-twitter fa-2x" aria-hidden="true"></i> 
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-pinterest fa-2x" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-dribbble fa-2x" aria-hidden="true"></i>
                        </a>
                      </li>
                      {{-- <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i id="icons" class="fa fa-youtube fa-2x" aria-hidden="true"></i>   
                        </a>
                      </li> --}}
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 section-t8">
            <div class="title-box-d">
              <h3 class="title-d">My Properties (3)</h3>
            </div>
          </div>
          <div class="row property-grid grid">
            <div class="col-sm-12">
              <div class="grid-option">
                <form>
                  <select class="custom-select">
                    <option selected>Choose...</option>
                    <option value="1">New to Old</option>
                    <option value="2">For Rent</option>
                    <option value="3">For Sale</option>
                  </select>
                </form>
              </div>
            </div>
<div class="row">
  <div class="col-md-4">
    <div class="card-box-a border">
      <div class="img-box-a">
        {{-- <img src= " {{asset('img/property-10.jpg')}}" alt="" class="img-a img-fluid"> --}}
        <img src="{{asset('img/cameroon-house-1.jpeg')}}" alt="" class="img-a img-fluid" style="width:500px">
        <h4 class="pt-3"><span class="badge badge-success">verified</span></h4>
      </div>

      <div class="card-body">
        <h5 class="card-title">Apartment</h5>
        <p>location | <u class="text-dark"> Buea </u></p>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="price-box d-flex p-3">
          <span class="price-a">rent | CFA 50.000</span>
        </div>
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        <div class="listing-amenities">
          <ul class="card-info d-flex justify-content-around">
            <li>
              <h4 class="card-info-title">Kitchen</h4>
              <span>1</span>
            </li>
            <li>
              <h4 class="card-info-title">Bedrooms</h4>
              <span>2</span>
            </li>
            <li>
              <h4 class="card-info-title">Bathrooms</h4>
              <span>4</span>
            </li>
            <li>
              <h4 class="card-info-title">Kitchen</h4>
              <span>1</span>
            </li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>

  <div class="col-md-4">
    <div class="card-box-a border">
      <div class="img-box-a">
        {{-- <img src= " {{asset('img/property-10.jpg')}}" alt="" class="img-a img-fluid"> --}}
        <img src="{{asset('img/cameroon-interior-2.jpeg')}}" alt="" class="img-a img-fluid" style="width:500px">
        <h4 class="pt-3"><span class="badge badge-success">verified</span></h4>
      </div>

      <div class="card-body">
        <h5 class="card-title">Studio</h5>
        <p>location | <u class="text-dark"> Bafoussam </u></p>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="price-box d-flex p-3">
          <span class="price-a">rent | CFA 60.000</span>
        </div>
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        <div class="listing-amenities">
          <ul class="card-info d-flex justify-content-around">
            <li>
              <h4 class="card-info-title">Kitchen</h4>
              <span>1</span>
            </li>
            <li>
              <h4 class="card-info-title">Bedrooms</h4>
              <span>1</span>
            </li>
            <li>
              <h4 class="card-info-title">Bathrooms</h4>
              <span>1</span>
            </li>
            <li>
              <h4 class="card-info-title">Kitchen</h4>
              <span>1</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card-box-a border">
      <div class="img-box-a">
        {{-- <img src= " {{asset('img/property-10.jpg')}}" alt="" class="img-a img-fluid"> --}}
        <img src="{{asset('img/cameroon-interior-1.jpeg')}}" alt="" class="img-a img-fluid" style="width:500px">
        <h4 class="pt-3"><span class="badge badge-success">verified</span></h4>
      </div>

      <div class="card-body">
        <h5 class="card-title">Guest house</h5>
        <p>location | <u class="text-dark"> Limbe </u></p>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <div class="price-box d-flex p-3">
          <span class="price-a">rent | CFA 100.000 | per day</span>
        </div>
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        <div class="listing-amenities">
          <ul class="card-info d-flex justify-content-around">
            <li>
              <h4 class="card-info-title">Kitchen</h4>
              <span>1</span>
            </li>
            <li>
              <h4 class="card-info-title">Bedrooms</h4>
              <span>4</span>
            </li>
            <li>
              <h4 class="card-info-title">Bathrooms</h4>
              <span>4</span>
            </li>
            <li>
              <h4 class="card-info-title">Kitchen</h4>
              <span>1</span>
            </li>
          </ul>
        </div>
      </div>
      
    </div>
  </div>
</div>
     

    </div> 
  </div>
</div>
</section><!-- End Agent Single -->


  </main><!-- End #main -->

@endsection