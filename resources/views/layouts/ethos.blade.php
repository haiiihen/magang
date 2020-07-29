<!DOCTYPE html>
<html class="no-js" lang="en">

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{config('elsamara.title')}}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{asset('ethos/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('ethos/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('ethos/css/vendor.css')}}">

    <!-- script
    ================================================== -->
    <script src="{{asset('ethos/js/modernizr.js')}}"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('ethos/images/elsamara-log-title.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('ethos/images/elsamara-log-title.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('ethos/images/elsamara-log-title.png')}}">
    <link rel="manifest" href="{{asset('ethos/site.webmanifest')}}">

</head>

<body id="top">

<!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a href="{{asset('/')}}">
                <img src="{{asset('ethos/images/elsamara-logo.png')}}" alt="Homepage">
            </a>
        </div>

        @yield('navbar')

        

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header>

@yield('content')

    <!-- Java Script
    ================================================== -->
    <script src="{{asset('/ethos/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{asset('/ethos/js/plugins.js') }}"></script>
    <script src="{{asset('/ethos/js/main.js')}}"></script>

</body>