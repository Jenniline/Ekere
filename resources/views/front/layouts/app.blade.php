<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('front.layouts._head')
</head>
<body>

    @include('front.layouts._nav')


    <!-- ======= Property Search Section ======= -->
 
    {{-- @include('front.layouts._nav') --}}

   
        @yield('content')
        @include('sweetalert::alert')


        @include('front.layouts._javascript')
        @include('front.layouts._footer')



</body>
</html>