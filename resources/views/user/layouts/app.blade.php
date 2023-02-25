@include('user.layouts.head')
@include('user.layouts.header')

@yield('content')

@if (!isset($excludefooter))
    @include('user.layouts.footer')
@endif
