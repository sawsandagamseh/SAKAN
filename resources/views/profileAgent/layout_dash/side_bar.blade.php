


<div class="user-profile-box mb-0">
    <div class="sidebar-header"><img src="images/logo-blue.svg" alt="header-logo2.png"> </div>
    <div class="header clearfix">
        <img src="images/testimonials/ts-1.jpg" alt="avatar" class="img-fluid profile-img">
    </div>
    <div class="active-user">
        <h2>{{ Auth::user()->name }}</h2>
    </div>
    <div class="detail clearfix">
        <ul class="mb-0">
            {{-- <li>
                <a class="active" href="dashboard_admin">
                
                    <i class="fa fa-map-marker"></i> Dashboard
                </a>
            </li> --}}
            {{-- <li>
                <a href="admin_profile">
                    <i class="fa fa-user"></i>Profile
                </a>
            </li> --}}
            <li>
                <a href="{{ route('propertyWithIndex', ['user_id' => Auth::user()->id]) }}">
                    {{-- {{ route('propertyAgent.index') }} --}}
                    <i class="fa fa-list" aria-hidden="true"></i>My Properties
                </a>
            </li>
            <li>
                <a href="
                    {{ route('subscription_agent.index') }}">
                    <i class="fa fa-list" aria-hidden="true"></i>Subscription
                </a>
            </li>
            <li>
                <a href="">
                    {{-- {{ route('apointmentAgent.index') }} --}}
                    <i class="fa fa-heart" aria-hidden="true"></i>Appointment
                </a>
            </li>
          
            {{-- <li>
                <a href="admin_add_property">
                    <i class="fa fa-list" aria-hidden="true"></i>Add Property
                </a>
            </li> --}}
            <li>
                <a href="{{ route('payment_agent.index') }}">
                    <i class="fas fa-credit-card"></i>Payments
                </a>
            </li>
            <li>
                <a href="admin_invoice">
                    <i class="fas fa-paste"></i>Invoices
                </a>
            </li>
            <li>
                <a href="admin_chang_password">
                    <i class="fa fa-lock"></i>Change Password
                </a>
            </li>
            <li>
                <a href="index.html">
                    <i class="fas fa-sign-out-alt"></i>Log Out
                </a>
            </li>
        </ul>
    </div>
</div>