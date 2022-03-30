@extends('front.layouts.app')

@section('content')

  <main id="main">
    <!-- =======Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Agents</h1>
              <span class="color-text-a">Grid Properties</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Agents Grid
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
  </main>   
    {{-- Pulled from Database --}}

    <div class="container">
      <div class="row">      
        @foreach($agents as $agent)
        <div class="col-md-4">
          <div class="card-box-a border">
            <div class="img-box-a">
              {{-- <img src= " {{asset('img/property-10.jpg')}}" alt="" class="img-a img-fluid"> --}}
              <img src=" {{ $agent->image }}" alt="" class="img-a img-fluid" width="500px" height="500px">
              <h4 class="pt-3"><span class="badge badge-success">verified</span></h4>
            </div>
      
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 border-right">
                  <h5 class="card-title"> {{$agent->name}} </h5>
               ID   <h5 class="card-title"> {{$agent->id}} </h5>

                  <p> City | <u class="text-dark"> {{$agent->city_id}} </u></p>
                  <p class="card-text"> {{$agent->email}} </p>
                </div> 

                <div class="col-md-6">
                  <p>phone number</p>

                  <div class="price-box d-flex">
                    <span class="price-a"> +237 {{$agent->phone_number}} </span>
                  </div>
                </div>
              </div>
              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
              <div class="icon-box-content table-cell">
                {{-- <div class="icon-box-title">
                  <h4 class="icon-title">Social networks</h4>
                </div> --}}
                <div class="icon-box-content">
                  <div class="socials-footer">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="fa fa-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="row">
                  <i id="icons" class="fa fa-star"></i>
                  <i id="icons" class="fa fa-star"></i>
                  <i id="icons" class="fa fa-star"></i>
                  <i id="icons" class="fa fa-star"></i>
                  <i id="icons" class="fa fa-star"></i>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        @endforeach
      </div>
    </div>

    
  

            
            
          
          <div class="container pt-5">
            <div class="row">
              <div class="col-sm-12">
                <nav class="pagination-a">
                  <ul class="pagination justify-content-center">
                    {{ $agents->links() }}            
                  </ul>
                </nav>
              </div>
            </div>
          </div> 
            
@endsection