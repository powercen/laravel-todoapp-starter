@extends('partials.bodywithoutsidenav')

@section('title', 'Home | ToDoApp')

@section('content')

<div class="home">
    <div class="container">
        <div class="row text-left vh-align">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jumbotron bg-inherit text-white">
                    <div class="container">
                        {{--<h1>ToDoApp<sup><em class="font70"><span class="text-cyan">beta</span></em></sup>&nbsp;<img src="{{ asset('images/logos/logo.png') }}" alt="todoapp logo" height="100" /></h1>--}}
                        <h1>24&nbsp;h<i class="fa fa-clock-o"></i>urs<sup><em class="font70"><span class="text-cyan">beta</span></em></sup>&nbsp;</h1>
                        <p>Get Shit Done!</p>
                        <p>
                            <a href="{{ url('auth/login') }}" class="btn btn-cyan">Login</a>
                            <a href="{{ url('auth/register') }}" class="btn btn-green">Register</a>
                        </p>
                    </div>
                </div>
            </div>
            {{--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">--}}
                {{--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-right">--}}
                    {{--<h1 class="text-grey"><a href="{{ url('auth/register') }}" class="btn btn-green montserrat btn-lg">Organise</a></h1>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-center">--}}
                    {{--<h1 class="text-grey"><a href="{{ url('auth/register') }}" class="btn btn-red montserrat btn-lg">Plan</a></h1>--}}
                {{--</div>--}}
                {{--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 text-left">--}}
                    {{--<h1 class="text-grey"><a href="{{ url('auth/register') }}" class="btn btn-cyan montserrat btn-lg">Accomplish</a></h1>--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>

@stop