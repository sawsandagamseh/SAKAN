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
                                <form method="post" action="{{ route('property.store') }}"

                                enctype="multipart/form-data">
                                    @method('POST')
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="title">Property Name</label>
                                                <input type="text" name="name" id="name"
                                                    placeholder="Enter your property name"
                                                    value="">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="description">Property description</label>
                                                <textarea id="description" name="description" placeholder="Describe about your property"></textarea>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12">
                                            <p class="no-mb">
                                                <label for="price">price</label>
                                                <input type="text" name="price" placeholder="USD"
                                                    id="price" value="">
                                            </p>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <p class="no-mb">
                                                {{-- <label for="price">Buillding Age</label>
                                                <input type="text" name="price" placeholder="USD"
                                                    id="price" value="{{ $editHome->price }}"> --}}


                                                    <select name="age" id="age"
                                                    placeholder="Buillding Age:"
                                                    
                                                    class="nice-select form-control wide" tabindex="0">
                                                    <option selected value="1-5 year">Age: </option>
                                                    <option value="1-5 year">  1-5 year </option>
                                                    <option value="5-10 year">  5-10 year </option>
                                                    <option value="10-20 year ">  10-20 year </option>
                                                    <option value="20-50 year">  20-50 year </option>
                                                    <option value="more than 50">  more than 50 </option>
                                                    </select>
                                            </p>
                                        </div>
                                        <div class="col-lg-4 col-md-12">
                                            <p class="no-mb">
                                                <label for="home_area">home_area</label>
                                                <input type="text" name="home_area" placeholder="USD"
                                                    id="home_area" value="">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                      
                                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                            <div class="form-group categories">
                                                {{-- <div class="nice-select form-control wide" tabindex="0"><span --}}


                                                <select name="category_id" id="category_id"
                                                    placeholder="Category"
                                                    style="width: 100% !important;"
                                                    class="nice-select form-control wide" tabindex="0">
                                                    @foreach ($allcat as $cat)
                                                        <option value="{{ $cat->id }}">
                                                            {{ $cat->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                            <div class="form-group categories">

                                                <select name="room_number" id="category"
                                                    placeholder="Room: "
                                                    
                                                    class="nice-select form-control wide" tabindex="0">
                                                    <option selected value="1"> Rooms:</option>
                                                    <option value="1">  1 </option>
                                                    <option value="2">  2 </option>
                                                    <option value="3">  3 </option>
                                                    <option value="4">  4 </option>
                                                    <option value="15">  5 </option>
                                                    <option value="6">  6 </option>
                                                    <option value="7">  7 </option>
                                                    <option value="8">  8 </option>
                                                    <option value="9">  9 </option>
                                                    <option value="10">  10 </option>
                                                    <option value="11">  11 </option>
                                                    <option value="12">  12</option>
                                                    <option value="13">  13 </option>
                                                    <option value="14">  14</option>
                                                    <option value="15">  15</option>
                                                    <option value="16">  16</option>
                                                    <option value="17">  17</option>
                                                    <option value="18">  18</option>
                                                    <option value="19">  19</option>
                                                    <option value="20">  20</option>
                                                    
                                                       
                                                    
                                                 
                                                </select>
                                                
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                            <div class="form-group categories">

                                                <select name="bedroom_number" 
                                                    placeholder="bedroom: "
                                                    
                                                    class="nice-select form-control wide" tabindex="0">
                                                    <option value="1" selected>Bedrooms: </option>
                                                    <option value="1">  1 </option>
                                                    <option value="2">  2 </option>
                                                    <option value="3">  3 </option>
                                                    <option value="4">  4 </option>
                                                    <option value="5">  5 </option>
                                                    <option value="6">  6 </option>
                                                    <option value="7">  7 </option>
                                                    <option value="8">  8 </option>
                                                    <option value="9">  9 </option>
                                                    <option value="10"> 10 </option>
                                                    
                                                       
                                                    
                                                 
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        {{-- <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                            
                                            <p class="no-mb">
                                                <select name="subscription" id="subscription" placeholder="subscription" style="width: 100% !important;">
                                                    @foreach ($allsub as $sub)
                                                        <option value="{{ $sub->id }}"  >
                                                            {{ $sub->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                             </p>
                                        </div> --}}
                                        
                                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                            <div class="form-group categories">

                                                <select name="bath_number" 
                                                    placeholder="Bath: "
                                                    
                                                    class="nice-select form-control wide" tabindex="0">
                                                    <option value="1" selected>BatrRooms: </option>
                                                    <option value="1">  1 </option>
                                                    <option value="2">  2 </option>
                                                    <option value="3">  3 </option>
                                                    <option value="4">  4 </option>
                                                    <option value="5">  5 </option>
                                                   
                                                    
                                                       
                                                    
                                                 
                                                </select>
                                                
                                            </div>
                                        </div>      <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                            <div class="form-group categories">

                                                <select name="carage_number" id="category"
                                                    placeholder="carage: "
                                                    
                                                    class="nice-select form-control wide" tabindex="0">
                                                    <option selected value="1">carages:</option>
                                                    <option value="1">  1 </option>
                                                    <option value="2">  2 </option>
                                                    <option value="3">  3 </option>
                                                    <option value="4">  4 </option>
                                                    
                                                 
                                                </select>
                                                
                                            </div>
                                        </div>


                                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                            <div class="form-group categories">

                                                <select name="avaliable" 
                                                    placeholder="Bath: "
                                                    
                                                    class="nice-select form-control wide" tabindex="0">
                                                    <option value="" selected>Rooms: </option>
                                                    <option value="1"> Yes</option>
                                                    <option value="0"> No </option>
                                                    
                                                    
                                                       
                                                    
                                                 
                                                </select>
                                                
                                            </div>
                                        </div>
                                    </div>

                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>property Media</h3>




                            <div class="row">
                                <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="image1">image1</label>
                                        <input name="image1" type="file" class="form-control white-input"
                                            id="inputPrice" value="">
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="image2">image2</label>
                                        <input name="image2" type="file" class="form-control white-input"
                                            id="inputPrice" value="">
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="image3">image3</label>
                                        <input name="image3" type="file" class="form-control white-input"
                                            id="inputPrice" value="">
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="image4">image4</label>
                                        <input name="image4" type="file" class="form-control white-input"
                                            id="inputPrice" value="">
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="image5">image5</label>
                                        <input name="image5" type="file" class="form-control white-input"
                                            id="inputPrice" value="">
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="image6">image6</label>
                                        <input name="image6" type="file" class="form-control white-input"
                                            id="inputPrice" value="">
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="image7">image7</label>
                                        <input name="image7" type="file" class="form-control white-input"
                                            id="inputPrice" value="">
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="image8">image8</label>
                                        <input name="image8" type="file" class="form-control white-input"
                                            id="inputPrice" value="">
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="image9">image9</label>
                                        <input name="image9" type="file" class="form-control white-input"
                                            id="inputPrice" value="">
                                    </p>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="image10">image10</label>
                                        <input name="image10" type="file" class="form-control white-input"
                                            id="inputPrice" value="">
                                    </p>
                                </div>

                                <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="plane_image">plane_image</label>
                                        <input name="plane_image" type="file" class="form-control white-input"
                                            id="inputPrice" value="">
                                    </p>
                                </div>
                                {{-- <div class="col-lg-3 col-md-12">
                                    <p class="no-mb">
                                        <label for="veidio">veidio</label>
                                        <input  name="veidio"  type="file" class="form-control white-input" id="inputPrice" value="{{$editHome->veidio}}">
                                    </p>
                                </div> --}}

                            </div>
                        </div>

                        <div class="single-add-property">
                            <h3>property Location</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="city">city</label>
                                            <input type="text" name="city" placeholder="Enter Your city"
                                                id="city" value="">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="district">district</label>
                                            <input type="text" name="district" placeholder="Enter Your district"
                                                id="district" value="">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="area_name">area_name</label>
                                            <input type="text" name="area_name" placeholder="Enter Your area_name"
                                                id="area_name" value="">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                       


                                        <div class="form-group categories">

                                            <select name="area_type" 
                                                placeholder="area_type: "
                                                
                                                class="nice-select form-control wide" tabindex="0">
                                                <option value="city" selected>area_type:</option>
                                                <option value="1"> city</option>
                                                <option value="0"> village </option>
                                                
                                                
                                                   
                                                
                                             
                                            </select>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb first">
                                            <label for="location">Google Maps location</label>
                                            <input type="text" name="location" placeholder="Google Maps location"
                                                id="location">
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
