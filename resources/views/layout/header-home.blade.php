<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Aug 2023 07:58:34 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">


    <title>@yield('title')</title>

    {{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}


    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href={{ asset('img/favicon.ico') }}>
    <link rel="stylesheet" href={{ asset('css/jquery-ui.css') }}>


    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">


    <!-- FONT AWESOME -->
    <link rel="stylesheet" href={{ asset('font/flaticon.css') }}>
    <link rel="stylesheet" href={{ asset('css/fontawesome-all.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/fontawesome-5-all.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href={{ asset('css/search.css') }}>
    <link rel="stylesheet" href={{ asset('css/animate.css') }}>
    <link rel="stylesheet" href={{ asset('css/aos.css') }}>
    <link rel="stylesheet" href={{ asset('css/aos2.css') }}>
    <link rel="stylesheet" href={{ asset('css/magnific-popup.css') }}>
    <link rel="stylesheet" href={{ asset('css/lightcase.css') }}>
    <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/menu.css') }}>
    <link rel="stylesheet" href={{ asset('css/slick.css') }}>
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
    <link rel="stylesheet" href={{ asset('css/maps.css') }}>
    <link rel="stylesheet" id="color" href={{ asset('css/colors/pink.css') }}>
</head>

<body class="homepage-9 hp-6 homepage-1 mh">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container" class="header head-tr">
            <!-- Header -->
            <div id="header" class="head-tr bottom">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="images/logo-white-1.svg"
                                    data-sticky-logo="images/logo-red.svg" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1 head-tr">
                            <ul id="responsive">
                                <li><a href="#">Home</a>
                                    {{-- {{route('homee')}} --}}

                                </li>
                                <li><a href="#">All Houses</a>
                                    {{-- {{route('all_Houses')}} --}}

                                </li>

                                <li><a href="#">About Us</a></li>
                                {{-- {{route('about_us')}} --}}
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <!-- <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                                    <li class=""><a href="register.html">Register</a></li> -->
                                <!-- <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li> -->
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->

                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                        @if (Auth::check())
                            <form method="POST" class="nav-item nav-link nav-sticky" action="{{ route('logout') }}">
                                @csrf

                                <a href="route('logout')"
                                    onclick="event.preventDefault();
                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                            @if (Auth::user()->roles == 'customer')
                                <a href="{{ route('profile.edit', [Auth::user()]) }}"
                                    class="nav-item nav-link nav-sticky">{{ Auth::user()->name }}</a>
                            @else
                                <a href="{{ route('agent_profile.index', ['id' => Auth::user()->id]) }}"
                                    class="nav-item nav-link nav-sticky">{{ Auth::user()->name }}</a>
                            @endif
                        @else
                            <a href="/login" class="nav-item nav-link nav-sticky">Login</a>
                            <a href="/register" class="nav-item nav-link nav-sticky">Regester</a>
                        @endif
                        {{-- <div class="header-widget sign-in">
                            <div class=""><a href='{{ route('login') }}'>Sign In</a></div>
                        </div>


                        <!-- Header Widget / End -->

                    </div>
                    {{-- <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <div class=""><a href="{{ route('register') }}">Register</a></div>
                        </div>

                        <!-- Header Widget / End -->

                    </div> --}}
                        <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
