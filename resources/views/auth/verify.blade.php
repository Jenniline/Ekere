@extends('front.layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container p-5 m-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    {{-- <img src=" {{asset('img/verify-email.png')}} " alt="" class="img-d img-fluid" style="width:600px; height:400px">  --}}
                    <h1 class="text-success">Verify your email address</h1>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                   <h3>  {{ __('Before proceeding, please check your email for a verification link.') }}</h3>  
                    <h4> {{ __('If you did not receive the email') }}, </h4>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
