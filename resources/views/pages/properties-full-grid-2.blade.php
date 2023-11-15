@extends('layout.master')

{{-- @include('layout.master') --}}


@section('content')
    <!-- Header Container / End -->
    <!-- END SECTION HEADINGS -->

    <!-- START SECTION PROPERTIES LISTING -->
    <section class="properties-list featured portfolio blog ho-17">
        <div class="container">
            <section class="headings-2 pt-0 pb-0">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p><a href="index.html">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                            </div>
                            <h3>Grid View</h3>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Search Form -->
            <div class="col-12 px-0 parallax-searchs">
                <div class="banner-search-wrap">
                    <div class="tab-content">
                        @if(isset($request)){
                     ggggggggggg
                        <form name="search_form" method="POST" action="{{ route('SrearchProperty') }}"
                            enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="tab-pane fade show active" id="tabs_1">
                                <div class="rld-main-search">
                                    <div class="row">
                                        <div class="rld-single-input">
                                            <input type="text" placeholder="Enter Keyword..." name="keyword">
                                        </div>
                                        <div class="rld-single-select ml-22">
                                            <select class="select single-select" name="category_id">
                                                <option value="{{$specifiCat->id}}">Property Type:{{$specifiCat->name}}</option>
                                                @foreach ($allcats as $allcat)
                                                    <option value="{{ $allcat->id }}">{{ $allcat->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="rld-single-select">
                                            <select class="select single-select mr-0" name="city">
                                                @if($request->city=='')
                                                <option value="">City</option>
                                                @else
                                                <option value="{{$request->city}}"> City: {{$request->city}}</option>
                                                @endif
                                                <option value="Amman">Amman</option>
                                                <option value="Irbid">Irbid</option>
                                                <option value="Jarash">Jarash</option>
                                                <option value="ALMafraq">ALMafraq</option>
                                                <option value="Ajloun">Ajloun</option>
                                                <option value="AlZarga">AlZarga</option>
                                                <option value="AlSalt">AlSalt</option>
                                                <option value="Madaba">Madaba</option>
                                                <option value="Maan">Maan</option>
                                                <option value="ALKarak">ALKarak</option>
                                                <option value="AlAqaba">AlAqaba</option>
                                                <option value="Madaba">Madaba</option>
                                                <option value="Altafeelh">Altafeelh</option>
                                            </select>
                                        </div>
                                        <div class="dropdown-filter"><span>Advanced Search</span></div>
                                        <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                            <button type="submit" class="btn btn-yellow serchNow" href="#">Search
                                                Now</button>

                                        </div>
                                        <div class="explore__form-checkbox-list full-filter">
                                            <div class="row">

                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                                    <!-- Form Bedrooms -->
                                                    <div class="rld-single-select">

                                                        <select class="select single-select mr-0" name="roomeNumber">
                                                            @if($request->roomeNumber==0)
                                                            <option value="0"><i class="fa fa-bath"
                                                                    aria-hidden="true"></i> Room number
                                                            </option>
                                                            @else
                                                            
                                                            <option value="{{$request->roomeNumber}}"><i class="fa fa-bath"
                                                                    aria-hidden="true"></i> Room number: {{$request->roomeNumber}}
                                                            </option>
                                                            @endif
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>

                                                        </select>
                                                    </div>
                                                    <!--/ End Form Bedrooms -->
                                                </div>
                                                <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                                    <!-- Form Bathrooms -->
                                                    <div class="rld-single-select">

                                                        <select class="select single-select mr-0" name="bathNumber">
                                                            @if($request->bathNumber==0)
                                                            <option value="0"><i class="fa fa-bath"
                                                                    aria-hidden="true"></i> Bath number
                                                            </option>
                                                            @else
                                                            
                                                            <option value="{{$request->bathNumber}}"><i class="fa fa-bath"
                                                                    aria-hidden="true"></i> Bath number: {{$request->bathNumber}}
                                                            </option>
                                                            @endif
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>

                                                        </select>
                                                    </div>

                                                    <!--/ End Form Bathrooms -->



                                                </div>
                                                <div
                                                    class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld d-none d-lg-none d-xl-flex">
                                                    <!-- Price Fields -->
                                                    <div class="main-search-field-2">
                                                        <!-- Area Range -->
                                                        <div class="range-slider">
                                                            <label>Area Size</label>
                                                            <div>
                                                                <input type="number" id="area-size-min" placeholder="min"
                                                                    name="area-size-min" value="0">
                                                                <input type="number" id="area-size-max"
                                                                    name="area-size-max" value="0" placeholder="max">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <!-- Price Range -->
                                                        <div class="range-slider">
                                                            <label>Price Range</label>
                                                            <div>
                                                                <input type="number" id="price-min" placeholder="min"
                                                                    name="price-min" value="0">
                                                                <input type="number" id="price-max" name="price-max"
                                                                    value="0" placeholder="max">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div
                                                    class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">

                                                </div>
                                                {{-- <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex"> --}}
                                                <!-- Checkboxes -->
                                                {{-- <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                            <input id="check-9" type="checkbox" name="check">
                                                            <label for="check-9">WiFi</label>
                                                            <input id="check-10" type="checkbox" name="check">
                                                            <label for="check-10">TV Cable</label>
                                                            <input id="check-11" type="checkbox" name="check">
                                                            <label for="check-11">Dryer</label>
                                                            <input id="check-12" type="checkbox" name="check">
                                                            <label for="check-12">Microwave</label>
                                                            <input id="check-13" type="checkbox" name="check">
                                                            <label for="check-13">Washer</label>
                                                            <input id="check-14" type="checkbox" name="check">
                                                            <label for="check-14">Refrigerator</label>
                                                            <input id="check-15" type="checkbox" name="check">
                                                            <label for="check-15">Outdoor Shower</label>
                                                        </div> --}}
                                                <!-- Checkboxes / End -->
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    }@else
                    lllllllllll<form name="search_form" method="POST" action="{{ route('SrearchProperty') }}"
                    enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="tab-pane fade show active" id="tabs_1">
                        <div class="rld-main-search">
                            <div class="row">
                                <div class="rld-single-input">
                                    <input type="text" placeholder="Enter Keyword..." name="keyword">
                                </div>
                                <div class="rld-single-select ml-22">
                                    <select class="select single-select" name="category_id">
                                        <option value="0">Property Type</option>
                                        @foreach ($allcats as $allcat)
                                            <option value="{{ $allcat->id }}">{{ $allcat->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="rld-single-select">
                                    <select class="select single-select mr-0" name="city">
                                        <option value="">City</option>
                                        <option value="Amman">Amman</option>
                                        <option value="Irbid">Irbid</option>
                                        <option value="Jarash">Jarash</option>
                                        <option value="ALMafraq">ALMafraq</option>
                                        <option value="Ajloun">Ajloun</option>
                                        <option value="AlZarga">AlZarga</option>
                                        <option value="AlSalt">AlSalt</option>
                                        <option value="Madaba">Madaba</option>
                                        <option value="Maan">Maan</option>
                                        <option value="ALKarak">ALKarak</option>
                                        <option value="AlAqaba">AlAqaba</option>
                                        <option value="Madaba">Madaba</option>
                                        <option value="Altafeelh">Altafeelh</option>
                                    </select>
                                </div>
                                <div class="dropdown-filter"><span>Advanced Search</span></div>
                                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                    <button type="submit" class="btn btn-yellow serchNow" href="#">Search
                                        Now</button>

                                </div>
                                <div class="explore__form-checkbox-list full-filter">
                                    <div class="row">

                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                            <!-- Form Bedrooms -->
                                            <div class="rld-single-select">

                                                <select class="select single-select mr-0" name="roomeNumber">
                                                    <option value="0"><i class="fa fa-bath"
                                                            aria-hidden="true"></i> Room number
                                                    </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>

                                                </select>
                                            </div>
                                            <!--/ End Form Bedrooms -->
                                        </div>
                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                            <!-- Form Bathrooms -->
                                            <div class="rld-single-select">

                                                <select class="select single-select mr-0" name="bathNumber">
                                                    <option value="0"><i class="fa fa-bath"
                                                            aria-hidden="true" ></i> Bath number
                                                    </option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>

                                                </select>
                                            </div>

                                            <!--/ End Form Bathrooms -->



                                        </div>
                                        <div
                                            class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld d-none d-lg-none d-xl-flex">
                                            <!-- Price Fields -->
                                            <div class="main-search-field-2">
                                                <!-- Area Range -->
                                                <div class="range-slider">
                                                    <label>Area Size</label>
                                                    <div>
                                                        <input type="number" id="area-size-min"
                                                            placeholder="min" name="area-size-min"
                                                            value="0">
                                                        <input type="number" id="area-size-max"
                                                            name="area-size-max" value="0"
                                                            placeholder="max">
                                                    </div>
                                                </div>
                                                <br>
                                                <!-- Price Range -->
                                                <div class="range-slider">
                                                    <label>Price Range</label>
                                                    <div>
                                                        <input type="number" id="price-min" placeholder="min"
                                                            name="price-min" value="0">
                                                        <input type="number" id="price-max" name="price-max"
                                                            value="0" placeholder="max">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div
                                            class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">

                                        </div>
                                        {{-- <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex"> --}}
                                        <!-- Checkboxes -->
                                        {{-- <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                <input id="check-9" type="checkbox" name="check">
                                                <label for="check-9">WiFi</label>
                                                <input id="check-10" type="checkbox" name="check">
                                                <label for="check-10">TV Cable</label>
                                                <input id="check-11" type="checkbox" name="check">
                                                <label for="check-11">Dryer</label>
                                                <input id="check-12" type="checkbox" name="check">
                                                <label for="check-12">Microwave</label>
                                                <input id="check-13" type="checkbox" name="check">
                                                <label for="check-13">Washer</label>
                                                <input id="check-14" type="checkbox" name="check">
                                                <label for="check-14">Refrigerator</label>
                                                <input id="check-15" type="checkbox" name="check">
                                                <label for="check-15">Outdoor Shower</label>
                                            </div> --}}
                                        <!-- Checkboxes / End -->
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>} @endif


                        
                    </div>
                </div>
            </div>
            <!--/ End Search Form -->
            <section class="headings-2 pt-0">
                <div class="pro-wrapper">
                    <div class="detail-wrapper-body">
                        <div class="listing-title-bar">
                            <div class="text-heading text-left">
                                <p class="font-weight-bold mb-0 mt-3">9 Search results</p>
                            </div>
                        </div>
                    </div>
                    <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                        <div class="input-group border rounded input-group-lg w-auto mr-4">
                            <label
                                class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                                for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                            <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                                data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3"
                                id="inputGroupSelect01" name="sortby">
                                <option selected>Top Selling</option>
                                <option value="1">Most Viewed</option>
                                <option value="2">Price(low to high)</option>
                                <option value="3">Price(high to low)</option>
                            </select>
                        </div>
                        <div class="sorting-options">
                            <a href="properties-full-list-1.html" class="change-view-btn lde"><i
                                    class="fa fa-th-list"></i></a>
                            <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row portfolio-items">
                @foreach ($allproperties as $allproperty)
                    <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                        <div class="project-single mb-0" data-aos="fade-up">
                            <a href="{{ route('singleHouse', ['id' => $allproperty->id]) }}" class="recent-16">
                                <div class="recent-img16 img-center"
                                    style="background-image: url({{ asset('images/interior/p-1.jpg') }});"></div>
                                <div class="recent-content"></div>
                                <div class="recent-details">
                                    <div class="recent-title">{{ $allproperty->name }}</div>
                                    <div class="recent-price">{{ $allproperty->price }}</div>
                                    <div class="recent-price">{{ $allproperty->city }}</div>
                                    <div class="house-details">{{ $allproperty->bedroom_number }} Bed <span>|</span>
                                        {{ $allproperty->bath_number }} Bath <span>|</span>
                                        {{ $allproperty->room_number }} sq ft</div>
                                </div>
                                <div class="view-proper">View Details</div>
                            </a>

                        </div>
                    </div>
                @endforeach
                {{ $allproperties->links() }}
            </div>
            {{-- <nav aria-label="..." class="pt-33">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav> --}}
        </div>
    </section>
    <!-- END SECTION PROPERTIES LISTING -->

    <!-- START FOOTER -->
@endsection
@section('registration')
    <!--register form -->

    <!--register form end -->

    <!-- ARCHIVES JS -->
@endsection
@section('script')
    <script>
        $(".dropdown-filter").on('click', function() {

            $(".explore__form-checkbox-list").toggleClass("filter-block");

        });
    </script>
@endsection
</div>
<!-- Wrapper / End -->
</body>


<!-- Mirrored from code-theme.com/html/findhouses/properties-full-grid-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Aug 2023 08:00:12 GMT -->

</html>
