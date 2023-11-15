{{-- @include('dash\layout_dash\nave')
@yield('content')
@include('dash\layout_dash\side_bar')
@yield('content2')
<div style="height: 200px; background-color:rgb(15, 16, 16);">sawsan jamil</div>
@include('dash\layout_dash\footer')
@yield('script') --}}


@include('dash\layout_dash\nave')
@yield('content')
@include('dash\layout_dash\side_bar')
@yield('content2')
@include('dash\layout_dash\dropdown')
@yield('content3')
{{-- <div style="height: 200px; background-color:rgb(15, 16, 16);">sawsan jamil</div> --}}
@include('dash\layout_dash\footer')
@yield('script')