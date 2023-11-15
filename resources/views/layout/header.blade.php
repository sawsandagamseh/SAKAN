<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/properties-full-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Aug 2023 08:00:12 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Grid View</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->


    <link rel="stylesheet" href={{ asset('font/flaticon.css') }}>
    <link rel="stylesheet" href={{ asset('css/fontawesome-all.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/fontawesome-5-all.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>

    <!-- for conact page map css -->
    @yield('contact-map-css')

    <!-- ARCHIVES CSS -->


    <link rel="stylesheet" id="color" href={{ asset('css/default.css') }}>

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

<body class="inner-pages agents hp-6 full hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="index.html"><img src="images/logo-red.svg" alt=""></a>
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
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="{{ route('home') }}">Home</a>

                                </li>
                                <li><a href="">All Houses</a>
                                    {{-- {{route('all_Houses')}} --}}

                                </li>

                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="">Contact Us</a></li>
                                {{-- {{route('contact')}}" --}}
                                <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->

                    <!-- Right Side Content / End -->
                    {{-- <div class="right-side d-none d-none d-lg-none d-xl-flex">
                        <!-- Header Widget -->
                        <div class="header-widget">
                            <a href="add-property.html" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
                        </div> --}}
                    <!-- Header Widget / End -->
                    {{-- </div> --}}
                    <!-- Right Side Content / End -->

                    <!-- Right Side Content / End -->
                    {{-- <div class="header-user-menu user-menu add">
                        <div class="header-user-name">
                            <span><img src="images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                        </div>
                        <ul>
                            <li><a href="user-profile.html"> Edit profile</a></li>
                            <li><a href="add-property.html"> Add Property</a></li>
                            <li><a href="payment-method.html">  Payments</a></li>
                            <li><a href="change-password.html"> Change Password</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </div>
                    <!-- Right Side Content / End -->

                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                       
                        <!-- Header Widget / End -->
                    </div>
                    <!-- Right Side Content / End -->

                    <!-- lang-wrap-->
                    
                    <!-- lang-wrap end-->

                </div>
            </div> --}}
                    @if (Auth::check())
                        <a href="{{ route('profile.edit', [Auth::user()]) }}"
                            class="nav-item nav-link nav-sticky">{{ Auth::user()->name }}</a>
                        <form method="POST" class="nav-item nav-link nav-sticky" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                onclick="event.preventDefault();
            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @else
                        <a href="/login" class="nav-item nav-link nav-sticky">Login</a>
                        <a href="/register" class="nav-item nav-link nav-sticky">Regester</a>
                    @endif
                    {{-- <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <div class="show-reg-form modal-open"><a href="#">Sign In</a></div>
                        </div>


                        <!-- Header Widget / End -->

                    </div>
                    <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                        <!-- Header Widget -->
                        <div class="header-widget sign-in">
                            <div class=""><a href="register.html">Register</a></div>
                        </div>

                        <!-- Header Widget / End -->

                    </div> --}}
                    <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- END SECTION HEADINGS -->
