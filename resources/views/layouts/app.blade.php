<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{URL::asset('websiteAssets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('websiteAssets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{URL::asset('websiteAssets/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{URL::asset('websiteAssets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('websiteAssets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('websiteAssets/css/aos.css')}}">
    <link rel="stylesheet" href="{{URL::asset('websiteAssets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('websiteAssets/css/bootstrap.min.css/bootstrap.min.css.map')}}">
    <link rel="stylesheet" href="{{URL::asset('websiteAssets/css/bootstrap/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('websiteAssets/css/bootstrap/bootstrap-grid.css')}}">
    <link rel="stylesheet" href="{{URL::asset('websiteAssets/css/bootstrap/bootstrap-reboot.css.css')}}">

    <title>@yield('title')</title>

</head>
<body style="direction: rtl">

   @yield('nav')
        <main class="py-4">
            @yield('content')
        </main>



@include('includes.footer')



   <script src="{{ URL::asset('websiteAssets/js/jquery-ui.js') }}"></script>
        <script src="{{ URL::asset('websiteAssets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ URL::asset('websiteAssets/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('websiteAssets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ URL::asset('websiteAssets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ URL::asset('websiteAssets/js/aos.js') }}"></script>
        <script src="{{ URL::asset('websiteAssets/js/main.js') }}"></script>
        <script src="{{ URL::asset('websiteAssets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ URL::asset('websiteAssets/js/slick.min.js') }}"></script>
        <script src="{{ URL::asset('websiteAssets/js/proper.min.js') }}"></script>
        <script src="{{ URL::asset('js/app.js') }}" defer></script>

</body>
</html>
