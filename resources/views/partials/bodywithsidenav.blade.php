@extends('app')

@section('bodycontent')

@include('pages.navigation.topnav')

@include('pages.navigation.sidenav')

@include('partials.notifications')

@yield('content')

{{--@include('partials.footer')--}}

{{--@include('partials.scrolltopbutton')--}}

@include('partials.scripts')

@stop