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
                      <span class="color-b">All listings are </span> verified  and validate 
                      <br> before publishing
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
                      <span class="color-b">We verify all the listings </span> on our platform
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
          {{-- Start Section for Sign up form --}}
    <section class="sign-up-form">
      <div class="container pt-5 mt-5">
          <div class="row">
            <div class="form-comments">
                <div class="title-box-d">
                  <h3 class="title-d">Post a listing here</h3>
                </div>
                <form class="form-a" method="POST" action="{{route('store-listing')}}" enctype="multipart/form-data">
                  {!! csrf_field() !!}
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <label for="inputName">Headline</label>
                        <input type="text" class="form-control form-control-lg form-control-a" id="headline" name="headline" placeholder="Headline *" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-group">
                          <label for="inputName">Price</label>
                          <input type="number" class="form-control form-control-lg form-control-a" id="inputPhoneNUmber" placeholder="Price *" name="price" required>
                        </div>
                    </div>

                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <label for="textMessage">Description</label>
                        <textarea id="textMessage" class="form-control" placeholder="Describe the lisitng*" name="description" cols="45" rows="8" required></textarea>
                      </div>
                    </div>

                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-md-6">
                            <label for="inputamenities">Bedrooms </label>
                            <input type="number" class="form-control form-control-lg form-control-a" id="inpuBedrooms" placeholder=" Number of Bedrooms *" name="bedroom" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputamenities">Bathrooms </label>
                            <input type="number" class="form-control form-control-lg form-control-a" id="inputBathrooms" placeholder=" Number of Bathrooms *" name="bathroom" required>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <label for="inputamenities">Parlor </label>
                            <input type="number" class="form-control form-control-lg form-control-a" id="inputParlor" placeholder=" Number of Parlors *" name="palor" required>
                          </div>
                          <div class="col-md-6">
                            <label for="inputamenities"> Kitchen </label>
                            <input type="number" class="form-control form-control-lg form-control-a" id="inputKitchen" placeholder=" Number of Kitchens *" name="kitchen" required>
                          </div>
                        </div> 
                        <div class="row pt-3">
                          <div class="col-md-3">
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                              <label class="form-check-label" for="inlineCheckbox1">Availability</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 

                  <div class="row">

                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">City</label>
                        <select name="city_id" class="form-control" required>
                          <option value="">Select City</option>
                          @foreach ($cities as $city)
                            <option value="{{$city->id}}"> {{$city->name}} </option> <br>
                          @endforeach
                          @if ($errors->has('city_id'))
                          <span class="help-block">
                            <strong>{{ $errors->first('city_id') }}</strong>
                          </span>
                         @endif
                        </select>
                      </div>
                    </div>

                    <div class="col-md-4">
                      <label for="inputamenities"> latitude </label>
                      <input type="number" class="form-control form-control-lg form-control-a" id="latitude" name="latitude"  required>
                    </div>

                    <div class="col-md-4">
                      <label for="inputamenities"> Longitude </label>
                      <input type="number" class="form-control form-control-lg form-control-a" id="longitude" name="longitude" required>
                    </div> 
                  </div>
                      
                    {{-- <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <label for="inputUrl">Enter website</label>
                        <input type="url" class="form-control form-control-lg form-control-a" id="inputUrl" placeholder="Website">
                      </div>
                    </div> --}}

                  <div class="title-box-d pt-3">
                      <h6 class="title-d">Upload Images of the listing here</h6>
                    </div>
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Bedroom Image</label>
                            <br>
                            <div>
                                <img src="{{ asset('img/uploadimage.jpg')}}" alt="" width="200px">
                                <input type="file" class="form-control-file" id="bedroomimage" name="bedroomimage">                                        
                            </div>
                          
                        </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="exampleFormControlFile1">Bathroom Image
                              <div>
                                  <img src="{{ asset('img/uploadimage.jpg')}}" alt="" width="200px">
                                  <input type="file" class="form-control-file" id="bathroomimage" name="bathroomimage">
                              </div>
                          </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Palor Image</label>
                            <br>
                            <div>
                                <img src="{{ asset('img/uploadimage.jpg')}}" alt="" width="200px">
                                <input type="file" class="form-control-file" id="palorimage" name="palorimage">                                        
                            </div>
                          
                        </div>
                      </div>
                      <div class="col-md-3">
                          <div class="form-group">
                              <label for="exampleFormControlFile1">Kitchen mage</label>
                              <br>
                              <div>
                                  <img src="{{ asset('img/uploadimage.jpg')}}" alt="" width="200px">
                                  <input type="file" class="form-control-file" id="kitchenimage" name="kitchenimage">
                              </div>
                          </div>
                      </div> 
                    </div>  
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-a btn-lg btn-block">submit</button>
                    </div>
                  </div>
                </form>
              </div>
          </section> 

</main>

@endsection