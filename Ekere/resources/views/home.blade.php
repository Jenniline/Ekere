@extends('front.layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<br>
<div class="container p-5 m-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <img src=" {{asset('img/successful-login.png')}} " alt="">
                <div class="card-header">Go to {{ __('Dashboard') }}  <a href=" {{route('indexonhomepage')}} "> <b> Click here</b> </a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    Go to the application
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
