@extends('dash\layout_dash\master_dash')

@section('content')
    <!-- START SECTION USER PROFILE -->
    <section class="user-page section-padding pt-5">
        <div class="container-fluid">

            <div class="row">

                <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                @endsection
                {{-- sidbar --}}

                @section('content2')
                </div>
                {{-- <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
              
                    </div> --}}


                <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">

                    <div class="col-lg-12 mobile-dashbord dashbord">
                        <div class="dashboard_navigationbar dashxl">
                        @endsection

                        {{-- dropdown --}}
                        @section('content3')
                        </div>
                    </div>


                    <br>

                    


                    <div class="my-properties">
                        <div class="row">
                            <div class="col-lg-9 col-md-12 col-xs-12 pl-0 user-dash2">
                                <a class="btn btn-common" href="{{ route('admin.createNewAdmin') }}"><i
                                        class="lni-chevron-left"></i> Add Admin</a>
                            </div>
                        </div>
                        <br>
                        <table class="table-responsive">
                            <thead>
                                <tr>
                                    <th class="pl-2">All Admins</th>
                                    <th class="p-0"></th>
                                    <th>Email</th>
                                    <th>Phone Number</th>


                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allAdmins as $allAdmin)
                                    <tr>
                                        <td class="image myelist">
                                            <a href="single-property-1.html"><img alt="my-properties-3"
                                                    src="images/feature-properties/fp-1.jpg" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="single-property-1.html">
                                                    <h2> {{ $allAdmin->first_name }} {{ $allAdmin->second_name }}</h2>
                                                    <h2> {{ $allAdmin->last_name }}</h2>
                                                </a>

                                            </div>
                                        </td>
                                        <td>{{ $allAdmin->phone }}</td>
                                       
                                        <td>{{ $allAdmin->email }}</td>

                                        <td >
                                            
                                            <form method="POST" action="{{ route('admin.destroy', $allAdmin->id) }}" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="color: red; border: none; background-color: transparent;">Delete</button>
                                            </form>                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        {{$allAdmins->links()}}
                    </div>

                    <br>

                    <div class="my-properties">

                    </div>


                </div>


            </div>
        </div>
    </section>
    <!-- END SECTION USER PROFILE -->
@endsection
{{-- footer --}}

@section('script')
    <script>
        $(".header-user-name").on("click", function() {
            $(".header-user-menu ul").toggleClass("hu-menu-vis");
            $(this).toggleClass("hu-menu-visdec");
        });
    </script>

    </div>
    <!-- Wrapper / End -->
    </body>


    <!-- Mirrored from code-theme.com/html/findhouses/my-listings.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Aug 2023 08:00:27 GMT -->

    </html>
@endsection
