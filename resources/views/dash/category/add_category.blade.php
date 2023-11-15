<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from code-theme.com/html/findhouses/add-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Aug 2023 08:00:27 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Find Houses - HTML5 Template</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href={{ asset('css/fontawesome-all.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/font-awesome.min.css') }}>
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href={{ asset('css/search.css') }}>
    <link rel="stylesheet" href={{ asset('css/dashbord-mobile-menu.css') }}>
    <link rel="stylesheet" href={{ asset('css/animate.css') }}>
    <link rel="stylesheet" href={{ asset('css/swiper.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/magnific-popup.css') }}>
    <link rel="stylesheet" href={{ asset('css/lightcase.css') }}>
    <link rel="stylesheet" href={{ asset('css/owl-carousel.css') }}>
    <link rel="stylesheet" href={{ asset('css/owl.carousel.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href={{ asset('css/menu.css') }}>
    <link rel="stylesheet" href={{ asset('css/slick.css') }}>
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
    <link rel="stylesheet" id="color" href={{ asset('css/default.css') }}>

</head>

<body class="inner-pages maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <!-- Header -->
                <div id="header">
                    <div class="container-fluid">
                        <!-- Left Side Content -->
                        <div class="left-side">
                            <!-- Logo -->
                            <div id="logo">
                                <a href="index.html"><img src="images/logo.svg" alt=""></a>
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
                                    <li><a href="index.html">Home</a>

                                    </li>
                                    <li><a href="properties-full-grid-2.html">All Houses</a>

                                    </li>

                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <!-- <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                                            <li class=""><a href="register.html">Register</a></li> -->
                                    <!-- <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li> -->
                                </ul>

                            </nav>
                            <div class="clearfix"></div>
                            <!-- Main Navigation / End -->
                        </div>
                        <!-- Left Side Content / End -->
                        <!-- Right Side Content / -->
                        <div class="header-user-menu user-menu">
                            <div class="header-user-name">
                                <span><img src="images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                            </div>
                            <ul>
                                <li><a href="admin_profile.html"> Edit profile</a></li>
                                <li><a href="add-property.html"> Add Property</a></li>
                                <li><a href="admin_payment.html"> Payments</a></li>
                                <li><a href="admin_chang_password.html"> Change Password</a></li>
                                <li><a href="#">Log Out</a></li>
                            </ul>
                        </div>
                        <!-- Right Side Content / End -->
                    </div>
                </div>
                <!-- Header / End -->
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION USER PROFILE -->
        <section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">
                            <div class="sidebar-header"><img src="images/logo-blue.svg" alt="header-logo2.png"> </div>
                            <div class="header clearfix">
                                <img src="images/testimonials/ts-1.jpg" alt="avatar" class="img-fluid profile-img">
                            </div>
                            <div class="active-user">
                                <h2>Mary Smith</h2>
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a class="active" href="dashboard_admin">
                                        
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_profile">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('property.index') }}">
                                            <i class="fa fa-list" aria-hidden="true"></i>My Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('subscription.index') }}">
                                            <i class="fa fa-list" aria-hidden="true"></i>Subscription
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('category.index') }}">
                                            <i class="fa fa-list" aria-hidden="true"></i>Category
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="favorited-listings">
                                            <i class="fa fa-heart" aria-hidden="true"></i>Favorited Properties
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href="{{ route('admin.index2') }}">
                                            <i class="fa fa-user"></i>Admin
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('customer.index') }}">
                                            <i class="fa fa-user"></i>Customer
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('agent.index') }}">
                                            <i class="fa fa-user"></i>Agent
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="admin_add_property">
                                            <i class="fa fa-list" aria-hidden="true"></i>Add Property
                                        </a>
                                    </li> --}}
                                    <li>
                                        <a href="admin_payment">
                                            <i class="fas fa-credit-card"></i>Payments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="admin_invoice">
                                            <i class="fas fa-paste"></i>Invoices
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="admin_chang_password">
                                            <i class="fa fa-lock"></i>Change Password
                                        </a>
                                    </li> --}}
                                    {{-- <li>
                                        <a href="index.html">
                                            <i class="fas fa-sign-out-alt"></i>Log Out
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
                        <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i
                                            class="fa fa-bars pr10 mr-2"></i>
                                        Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a href="dashboard_admin.html">
                                                <i class="fa fa-map-marker mr-3"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin_profile.html">
                                                <i class="fa fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin_my_listings.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorited-listings.html">
                                                <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited
                                                Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="add-admin_add_property.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" href="add-admin_add_property.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>Edit Property
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin_payment.html">
                                                <i class="fas fa-credit-card mr-3"></i>Payments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin_invoice.html">
                                                <i class="fas fa-paste mr-3"></i>Invoices
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin_chang_password.html">
                                                <i class="fa fa-lock mr-3"></i>Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index.html">
                                                <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                       
                        <div class="single-add-property">
                            <h3>Property description and price</h3>
                            <div class="property-form-group">
                                <form method="post" action="{{ route('category.store') }}"

                                enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="title">Category Name</label>
                                                <input type="text" name="name" id="name"
                                                    placeholder="Enter your property name"
                                                    value="">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-12">
                                            <p class="no-mb">
                                                <label for="image">image</label>
                                                <input name="image" type="file" class="form-control white-input"
                                                    id="image" value="">
                                            </p>
                                        </div>
                                    </div>
                                    
                                

                            </div>
                        </div>
                       

                       



                      
                        <div class="add-property-button pt-5">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="prperty-submit-button">
                                        <button type="submit">Submit Property</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                       
                    </div>
                </div>


            </div>
    </div>
    </section>
    <!-- END SECTION USER PROFILE -->

    <!-- START FOOTER -->
    <footer class="first-footer">
        <div class="second-footer">
            <div class="container">
                <p>2021 © Copyright - All Rights Reserved.</p>
                <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By Code-Theme</p>
            </div>
        </div>
    </footer>

    <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->

    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->
    <script src={{ asset('js/script.js') }}></script>
    <!-- ARCHIVES JS -->
    <script src={{ asset('js/jquery-3.5.1.min.js') }}></script>
    <script src={{ asset('js/popper.min.js') }}></script>
    <script src={{ asset('js/jquery-ui.js') }}></script>
    <script src={{ asset('js/tether.min.js') }}></script>
    <script src={{ asset('js/moment.js') }}></script>
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <script src={{ asset('js/mmenu.min.js') }}></script>
    <script src={{ asset('js/mmenu.js') }}></script>
    <script src={{ asset('js/swiper.min.js') }}></script>
    <script src={{ asset('js/swiper.js') }}></script>
    <script src={{ asset('js/slick.min.js') }}></script>
    <script src={{ asset('js/slick2.js') }}></script>
    <script src={{ asset('js/fitvids.js') }}></script>
    <script src={{ asset('js/jquery.waypoints.min.js') }}></script>
    <script src={{ asset('js/jquery.counterup.min.js') }}></script>
    <script src={{ asset('js/imagesloaded.pkgd.min.js') }}></script>
    <script src={{ asset('js/isotope.pkgd.min.js') }}></script>
    <script src={{ asset('js/smooth-scroll.min.js') }}></script>
    <script src={{ asset('js/lightcase.js') }}></script>
    <script src={{ asset('js/search.js') }}></script>
    <script src={{ asset('js/owl.carousel.js') }}></script>
    <script src={{ asset('js/jquery.magnific-popup.min.js') }}></script>
    <script src={{ asset('js/ajaxchimp.min.js') }}></script>
    <script src={{ asset('js/newsletter.js') }}></script>
    <script src={{ asset('js/jquery.form.js') }}></script>
    <script src={{ asset('js/jquery.validate.min.js') }}></script>
    <script src={{ asset('js/searched.js') }}></script>
    <script src={{ asset('js/dashbord-mobile-menu.js') }}></script>
    <script src={{ asset('js/forms-2.js') }}></script>
    <script src={{ asset('js/color-switcher.js') }}></script>
    <script src={{ asset('js/dropzone.js') }}></script>

    <!-- MAIN JS -->
    <script src={{ asset('js/script.js') }}></script>

    <script>
        $(".dropzone").dropzone({
            dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> Click here or drop files to upload",
        });
    </script>
    <script>
        $(".header-user-name").on("click", function() {
            $(".header-user-menu ul").toggleClass("hu-menu-vis");
            $(this).toggleClass("hu-menu-visdec");
        });
    </script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/add-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Aug 2023 08:00:27 GMT -->

</html>
