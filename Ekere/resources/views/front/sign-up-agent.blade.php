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
                          <h3 class="title-d"> Sign Up tp become an Agent</h3>
                        </div>
                        <form class="form-a">
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <div class="form-group">
                                <label for="inputName">Enter name</label>
                                <input type="text" class="form-control form-control-lg form-control-a" id="inputName" placeholder="Name *" required>
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                  <label for="inputName">Enter Phone Number</label>
                                  <input type="number" class="form-control form-control-lg form-control-a" id="inputPhoneNUmber" placeholder="Phone Number *" required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                              <div class="form-group">
                                <label for="inputEmail1">Enter email</label>
                                <input type="email" class="form-control form-control-lg form-control-a" id="inputEmail1" placeholder="Email *" required>
                              </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                            </div>
                            

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Type of Agent</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Landlord</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                                  </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">City</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                      <option>Buea</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>4</option>
                                      <option>5</option>
                                    </select>
                                  </div>
                            </div>
                            
                            {{-- <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <label for="inputUrl">Enter website</label>
                                <input type="url" class="form-control form-control-lg form-control-a" id="inputUrl" placeholder="Website">
                              </div>
                            </div> --}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Upload Front Image of National ID CARD</label>
                                    <br>
                                    <div>
                                        <img src="{{ asset('img/uploadimage.jpg')}}" alt="" width="200px">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">                                        
                                    </div>
                                  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Take an instant photo with Camera</label>
                                    <br>
                                    <div>
                                        <img src="{{ asset('img/uploadimage.jpg')}}" alt="" width="200px">
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 mb-3">
                              <div class="form-group">
                                <label for="textMessage">Bio</label>
                                <textarea id="textMessage" class="form-control" placeholder="Tell us About yourself *" name="message" cols="45" rows="8" required></textarea>
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