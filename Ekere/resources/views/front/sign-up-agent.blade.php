@extends('front.layouts.app')

@section('content')


<main id="main">

   <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('img/slide-1.jpg')}}) ">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    {{-- <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p> --}}
                    <h1 class="intro-title mb-6">
                      <span class="color-b">Verification & Validation </span>  service
                      <br> to become an Agent
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ asset('img/slide-2.jpg')}})">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="intro-body">
                    {{-- <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p> --}}
                    <h1 class="intro-title mb-8">
                      <span class="color-b">We verify your identity as </span> an Agent
                      <br> 
                      <span class="color-b">With our Machine </span>   learning Algorithm 
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image:  url({{ asset('img/slide-3.jpg')}})">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    {{-- <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p> --}}
                    <h1 class="intro-title mb-4">
                      <span class="color-b">Agent Legitimacy is  </span> Prime to us
                      {{-- <br> Roan Road One --}}
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

{{-- How it works --}}
        <!-- ======= Services Section ======= -->
        <section class="section-services section-t8">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="title-wrap d-flex justify-content-between">
                    <div class="title-box">
                      <h2 class="title-a">How it works</h2>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                      <div class="card-box-ico">
                        <span class="fa fa-gamepad"></span>
                      </div>
                      <div class="card-title-c align-self-center">
                        <h2 class="title-c">Lifestyle</h2>
                      </div>
                    </div>
                    <div class="card-body-c">
                      <p class="content-c">
                        Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                        convallis a pellentesque
                        nec, egestas non nisi.
                      </p>
                    </div>
                    <div class="card-footer-c">
                      <a href="#" class="link-c link-icon">Read more
                        <span class="ion-ios-arrow-forward"></span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                      <div class="card-box-ico">
                        <span class="fa fa-usd"></span>
                      </div>
                      <div class="card-title-c align-self-center">
                        <h2 class="title-c">Loans</h2>
                      </div>
                    </div>
                    <div class="card-body-c">
                      <p class="content-c">
                        Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                        aliquet elit, eget tincidunt
                        nibh pulvinar a.
                      </p>
                    </div>
                    <div class="card-footer-c">
                      <a href="#" class="link-c link-icon">Read more
                        <span class="ion-ios-arrow-forward"></span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card-box-c foo">
                    <div class="card-header-c d-flex">
                      <div class="card-box-ico">
                        <span class="fa fa-home"></span>
                      </div>
                      <div class="card-title-c align-self-center">
                        <h2 class="title-c">Sell</h2>
                      </div>
                    </div>
                    <div class="card-body-c">
                      <p class="content-c">
                        Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                        convallis a pellentesque
                        nec, egestas non nisi.
                      </p>
                    </div>
                    <div class="card-footer-c">
                      <a href="#" class="link-c link-icon">Read more
                        <span class="ion-ios-arrow-forward"></span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section><!-- End Services Section -->


          {{-- Start Section for Sign up form --}}

          <section class="sign-up-form">
              <div class="container pt-5 mt-5">
                  <div class="row">
                    <div class="form-comments">
                        <div class="title-box-d">
                          <h3 class="title-d"> Sign Up to become an Agent</h3>
                        </div>
                        <form class="form-a" method="POST" action="{{route('store-agent')}}" enctype="multipart/form-data">
                          {!! csrf_field() !!}
                          @csrf
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <div class="form-group">
                                <label for="inputName">Enter name</label>
                                <input type="text" class="form-control form-control-lg form-control-a" name="agent_name" placeholder="Name *">
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                  <label for="inputName">Enter Phone Number</label>
                                  <input type="number" class="form-control form-control-lg form-control-a" id="inputPhoneNUmber" name="agent_phone_number" placeholder="Phone Number *">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                              <div class="form-group">
                                <label for="inputEmail1">Enter email</label>
                                <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" name="agent_email" placeholder="Email *">
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="agent_password"> 
                                </div>
                            </div>
                            

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Type of Agent</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="type-of-agent">
                                      <option>Landlord</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                                  </div>
                            </div>

                            {{-- <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">City</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="city_id">
                                  @foreach($cities as $city)
                                  <option value=" {{$city->id}} "> {{$city->name}} </option>
                                @endforeach
                                </select>
                                <select name="city_id" class="form-control" required>
                                  <option value="">select City</option>
                                  @foreach ($cities as $city)
                                    <option {{ $city->name == 'Buea' ? 'selected' : '' }} value="{{$city->id}}"> {{$city->name}} </option> <br>
                                  @endforeach
                                  @if ($errors->has('city_id'))
                                  <span class="help-block">
                                    <strong>{{ $errors->first('city_id') }}</strong>
                                  </span>
                                 @endif
                                </select>
                              </div>
                            </div> --}}
                            
                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <label for="inputUrl">Enter website</label>
                                <input type="url" class="form-control form-control-lg form-control-a" id="inputUrl" placeholder="Website">
                              </div>
                            </div> 
                             <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleFormControlFile1"> <h3> Upload Front Image of National ID CARD</h3> </label>
                                  <br>
                                  <div>
                                      <img src="{{ asset('img/uploadimage.jpg')}}" alt="" width="200px">
                                      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="idimage">                                        
                                  </div> 
                                </div>
                            </div> 
                             <div class="col-md-6">
                                <div class="form-group">
                                  <label for="exampleFormControlFile1"><h3> Take an instant photo with Camera </h3> </label>
                                  
                                  <div class="contentarea">
                                  
                                    <div class="camera">
                                        <video id="video">Video stream not available.</video>
                                    </div>
                                    <div><button id="startbutton">Take photo</button></div>
                                    <canvas id="canvas"></canvas>
                                    <div class="output">
                                        <img id="photo" type="file" alt="The screen capture will appear in this box.">
                                        <input type="file" id="lifephoto" name="lifephoto" hidden>
                                    </div>
                                  </div>

                                </div>
                            </div> 


                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <label for="textMessage">Bio</label>
                                <textarea id="bio" class="form-control" placeholder="Tell us About yourself *" name="agent_bio" cols="45" rows="8"></textarea>
                              </div>
                            </div> 

                            <div class="col-md-12">
                              <button type="submit" class="btn btn-a btn-lg btn-block">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
                  </section> 
                  {{-- End Section for Sign up form --}}
                  </div>
              </div>
            

    
</main>





@endsection