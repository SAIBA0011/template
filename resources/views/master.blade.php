@include('includes.header')
@include('includes.nav')

@if(Request::is('/'))
    @include('includes.slider')
@endif

@yield('content')



@include('includes.footer')
@yield('scripts')