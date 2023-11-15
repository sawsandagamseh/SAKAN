@extends('profileAgent\layout_dash\master_dash')
       @section('content')
       
        <!-- START SECTION DASHBOARD -->
        <section class="user-page section-padding">
            <div class="container-fluid">

                
                <div class="row">
                    
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        @endsection
                        {{-- sid bar --}}

                        @section('content2')
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
                       <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                       @endsection
                                {{-------------Dropdown  ------------}}
                        @section('content3')
                            </div>
                        </div>
                        {{-- <div class="dashborad-box stat bg-white">
                            <h4 class="title">Manage Dashboard</h4>
                            <div class="section-body">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-xs-12 dar pro mr-3">
                                        <div class="item">
                                            <div class="icon">
                                                <i class="fa fa-list" aria-hidden="true"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">345</h6>
                                                <p class="type ml-1">Published Property</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-xs-12 dar rev mr-3">
                                        <div class="item">
                                            <div class="icon">
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">116</h6>
                                                <p class="type ml-1">Total Reviews</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 dar com mr-3">
                                        <div class="item mb-0">
                                            <div class="icon">
                                                <i class="fas fa-comments"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">223</h6>
                                                <p class="type ml-1">Messages</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 dar booked">
                                        <div class="item mb-0">
                                            <div class="icon">
                                                <i class="fas fa-heart"></i>
                                            </div>
                                            <div class="info">
                                                <h6 class="number">432</h6>
                                                <p class="type ml-1">Times Bookmarked</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashborad-box">
                            <h4 class="title">Listing</h4>
                            <div class="section-body listing-table">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Listing Name</th>
                                                <th>Date</th>
                                                <th>Rating</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Luxury Restaurant</td>
                                                <td>23 Jan 2020</td>
                                                <td class="rating"><span>5.0</span></td>
                                                <td class="status"><span class=" active">Active</span></td>
                                                <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Gym in Town</td>
                                                <td>11 Feb 2020</td>
                                                <td class="rating"><span>4.5</span></td>
                                                <td class="status"><span class="active">Active</span></td>
                                                <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>Cafe in Boston</td>
                                                <td>09 Jan 2020</td>
                                                <td class="rating"><span>5.0</span></td>
                                                <td class="status"><span class="non-active">Non-Active</span></td>
                                                <td class="edit"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="pb-0">Car Dealer in New York</td>
                                                <td class="pb-0">24 Feb 2018</td>
                                                <td class="rating pb-0"><span>4.5</span></td>
                                                <td class="status pb-0"><span class="active">Active</span></td>
                                                <td class="edit pb-0"><a href="#"><i class="fa fa-pencil"></i></a></td>
                                                <td><a href="#"><i class="far fa-trash-alt"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="dashborad-box">
                            <h4 class="title">Message</h4>
                            <div class="section-body">
                                <div class="messages">
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-1.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Mary Smith</h6>
                                            <p class="post-time">22 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-2.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Karl Tyron</h6>
                                            <p class="post-time">23 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="message">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-3.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h6>Lisa Willis</h6>
                                            <p class="post-time">53 Minutes ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashborad-box">
                            <h4 class="title">Review</h4>
                            <div class="section-body">
                                <div class="reviews">
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-4.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Family House</h5>
                                            <h6>Mary Smith</h6>
                                            <p class="post-time">10 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-5.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Bay Apartment</h5>
                                            <h6>Karl Tyron</h6>
                                            <p class="post-time">22 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review">
                                        <div class="thumb">
                                            <img class="img-fluid" src="images/testimonials/ts-6.jpg" alt="">
                                        </div>
                                        <div class="body">
                                            <h5>Family House Villa</h5>
                                            <h6>Lisa Willis</h6>
                                            <p class="post-time">51 hours ago</p>
                                            <p class="content mb-0 mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                                            <ul class="starts mb-0">
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star"></i>
                                                </li>
                                                <li><i class="fa fa-star-o"></i>
                                                </li>
                                            </ul>
                                            <div class="controller">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                                    <li><a href="#"><i class="far fa-trash-alt"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-lg-6 col-md-6 col-xs-6 widget-boxed mt-33 mt-0 offset-lg-2 offset-md-3">
                            <div class="col-lg-12 mobile-dashbord dashbord">
                                 <div class="dashboard_navigationbar dashxl">
                                     <div class="dropdown">
                                         <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                         <ul id="myDropdown" class="dropdown-content">
                                             <li>
                                                 <a href="dashboard.html">
                                                     <i class="fa fa-map-marker mr-3"></i> Dashboard
                                                 </a>
                                             </li>
                                             <li>
                                                 <a class="active" href="user-profile.html">
                                                     <i class="fa fa-user mr-3"></i>Profile
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="my-listings.html">
                                                     <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="favorited-listings.html">
                                                     <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited Properties
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="add-property.html">
                                                     <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="payment-method.html">
                                                     <i class="fas fa-credit-card mr-3"></i>Payments
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="invoice.html">
                                                     <i class="fas fa-paste mr-3"></i>Invoices
                                                 </a>
                                             </li>
                                             <li>
                                                 <a href="change-password.html">
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
                             {{-- <div class="widget-boxed-header">
                                 <h4>Profile Details</h4>
                             </div>
                             <div class="sidebar-widget author-widget2">
                                 <div class="author-box clearfix">
                                     <img src="images/testimonials/ts-1.jpg" alt="author-image" class="author__img">
                                     <h4 class="author__title">Lisa Clark</h4>
                                     <p class="author__meta">Agent of Property</p>
                                 </div>
                                 <ul class="author__contact">
                                     <li><span class="la la-map-marker"><i class="fa fa-map-marker"></i></span>302 Av Park, New York</li>
                                     <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><a href="#">(234) 0200 17813</a></li>
                                     <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><a href="#">lisa@gmail.com</a></li>
                                 </ul>
                                 <div class="agent-contact-form-sidebar">
                                     <h4>Request Inquiry</h4>
                                     <form name="contact_form" method="post" action="https://code-theme.com/html/findhouses/functions.php">
                                         <input type="text" id="fname" name="full_name" placeholder="Full Name" required />
                                         <input type="number" id="pnumber" name="phone_number" placeholder="Phone Number" required />
                                         <input type="email" id="emailid" name="email_address" placeholder="Email Address" required />
                                         <textarea placeholder="Message" name="message" required></textarea>
                                         <input type="submit" name="sendmessage" class="multiple-send-message" value="Submit Request" />
                                     </form>
                                 </div>
                             </div> --}}
                         </div>
                        <div class="dashborad-box mb-0">
                            <h4 class="heading pt-0">Personal Information</h4>

                          
                            <div class="section-inforamation">
                                <form method="POST" action="{{ route('Agent_profile.update', ['Agent_profile' => $agent->id]) }}" enctype="multipart/form-data">
                                    @method('PUT')
                                     @csrf 
                                    <div class="row">
                                        
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Agent Full Name</label>
                                                <input type="text" class="form-control" placeholder="Enter your Last name" name="name" value="{{ $agent->name}}">
                                                <span style="color:red">@error('name'){{ $message }} @enderror</span><br><br>
                                            </div>
                                        </div>
                                        
                                        <div>
                                            <div class="form-group">
                                                
                                                <input type="hidden" class="form-control" placeholder="Ex: +1-800-7700-00" name="id" value="{{ $agent->id}}">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-group">
                                                
                                                <input type="hidden" class="form-control" placeholder="Ex: +1-800-7700-00" name="roles" value="{{ $agent->roles}}">
                                            </div>
                                        </div>
                                       
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" placeholder="Write about userself" name="address" value="{{ $agent->address}}">

                                                {{-- <textarea name="address" class="form-control" placeholder="Write about userself" name="about" value="{{ $agent->about}}"> {{ $agent->about}} </textarea> --}}
                                                <span style="color:red">@error('address'){{ $message }} @enderror</span><br><br>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>ypur image</label>
                                                <input  name="image" type="file" class="form-control white-input" id="inputPrice">
                                                 <span style="color:red">@error('image'){{ $message }} @enderror</span><br><br>
                                  </div>
                                        </div>

                                        
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" placeholder="Ex: +1-800-7700-00" name="phone" value="{{ $agent->phone}}">
                                                <span style="color:red">@error('phone'){{ $message }} @enderror</span><br><br>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input type="text" class="form-control" placeholder="Ex: example@domain.com" name="email" value="{{ $agent->email}}">
                                                <span style="color:red">@error('email'){{ $message }} @enderror</span><br><br>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>ID numder</label>
                                                <input type="number" name="ID" class="form-control" placeholder="Write Your Id">
                                            </div>
                                        </div> --}}
                                    </div>
                                    <div class="password-section">
                                        <h6>Update Password</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <input type="password" class="form-control" placeholder="Write new password" name="password">
                                                    <span style="color:red">@error('password'){{ $message }} @enderror</span><br><br>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Repeat Password</label>
                                                    <input type="password" class="form-control" placeholder="Write same password again" name="password_confirmation">
                                                    <span style="color:red">@error('password_confirmation'){{ $message }} @enderror</span><br><br>
                                                </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg mt-2">Submit</button>
                                </form>
                            </div>

                           
                        </div>
                        <!-- START FOOTER -->
        @endsection              
        @section('script')
            
     
        <script>
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });

        </script>

        <!-- MAIN JS -->
        <script src="js/script.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Aug 2023 08:00:27 GMT -->
</html>
@endsection