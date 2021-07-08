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
                    <div class="card-box-d">
                      <div class="card-img-d">
                        <img src=" {{asset('img/agent-4.jpg')}} " alt="" class="img-d img-fluid">
                      </div>
                      <div class="card-overlay card-overlay-hover">
                        <div class="card-header-d">
                          <div class="card-title-d align-self-center">
                            <h3 class="title-d">
                              <a href="#" class="link-two"> {{$agent->name}}</a>
                            </h3>
                          </div>
                        </div>
                        <div class="card-body-d">
                          <p class="content-d color-text-a">
                            {{$agent->about}}
                          </p>
                          <div class="info-agents color-a">
                            <p>
                              <strong>Phone: </strong> {{$agent->phone_number}}
                            </p>
                            <p>
                              <strong>Email: </strong> {{$agent->email}}
                            </p>
                            <p>
                              <strong>City: </strong> Buea
                            </p>
                          </div>
                        </div>
                        <div class="card-footer-d">
                          <div class="socials-footer d-flex justify-content-center">
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