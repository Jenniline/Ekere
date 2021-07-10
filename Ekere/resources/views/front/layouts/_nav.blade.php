<!-- ======= Header/Navbar ======= -->
<nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">
        {{-- {{ config('app.name', 'Laravel') }} --}}
      </a>
      <a class="navbar-brand text-brand" href="index.html">Safe<span class="color-b">Housing</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('index')}} ">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item dropdown ">            
            <a class="nav-link dropdown-toggle" href="{{route('listings-index')}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Property
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              {{-- <a class="dropdown-item" href="property-single.html">Property Single</a>
              <a class="dropdown-item" href="blog-single.html">Blog Single</a> --}}

              <a class="dropdown-item" href="{{route('listings-index')}}">All Listings</a>
              <a class="dropdown-item" href=" {{route('create-listing')}} ">Create a listing</a>
              
            </div>

          </li>
          <li class="nav-item">
            <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Agent Pages
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              {{-- <a class="dropdown-item" href="property-single.html">Property Single</a>
              <a class="dropdown-item" href="blog-single.html">Blog Single</a> --}}
              <a class="dropdown-item" href="{{route('agents-index')}}">All Agents</a>
              {{-- <a class="dropdown-item" href="{{route('show-agent')}} ">Show Agent</a> --}}
              <a class="dropdown-item" href="{{route('agent-jenn')}} ">Agent Jenn</a>

            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}} ">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  <div class="price-box d-flex-end">
    {{-- <a href="{{route('agent-rules-modal')}}"> <span class="price-a bg-success">Become an Agent</span></a> --}}
    <a href="{{route('sign-up-agent-form')}}"> <span class="price-a bg-success text-white">Become an Agent</span></a>
  </div>
  <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
    <span class="fa fa-search" aria-hidden="true"></span>
  </button>

  </nav><!-- End Header/Navbar -->
