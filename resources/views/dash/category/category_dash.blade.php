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
                                <a class="btn btn-common" href="{{ route('category.create') }}"><i class="lni-chevron-left"></i> Add Property</a> 
                                </div>
                            </div>
                            <br>
                            <table class="table-responsive">
                                <thead>
                                    <tr>
                                        <th class="pl-2">My Properties</th>
                                        <th class="p-0"></th>
                                        <th>Buillding Age</th>
                                        <th>Date Added</th>
                                       
                                        <th>Monthly rental price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allcats as $allcat)
                                    <tr>
                                        <td class="image myelist">
                                            <a href="single-property-1.html"><img alt="my-properties-3" src="/images/{{ $allcat->image }}" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <a href="single-property-1.html"><h2> {{$allcat->name}}</h2></a>
                                                <figure><i class="lni-map-marker"></i> {{$allcat->area_name}}, {{$allcat->district}}, {{$allcat->city}}</figure>
                                                <ul class="starts text-left mb-0">
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>category
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="mb-0"><i class="fa fa-star"></i>
                                                    </li>
                                                    <li class="ml-3">(6 Reviews)</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>{{$allcat->age}}</td>
                                        <td>05.14.2020</td>
                                        <td>{{$allcat->price}}</td>
                                        
                                        <td class="actions">
                                            <a href="{{ route('category.edit',$allcat->id) }}" class="edit"><i class="lni-pencil"></i>Edit</a>
                                           
                                            
                                                <form method="POST" action="{{ route('category.destroy', $allcat->id) }}" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="color: red; border: none; background-color: transparent;">Delete</button>
                                                </form>                                        
                                       
                                        </td>
                                    </tr>
                                    
                                   @endforeach
                                   
                                </tbody>
                            </table>
                            {{$allcats->links()}}
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