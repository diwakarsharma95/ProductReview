@extends('layouts.app')
@section('title')
Products
@endsection
@section('content')
<div class="col-sm-12 text-center" style="background-color:lavender;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top text-center">
            <div class="container">
                You can't access this page ! This is for only "{{$role}}" user only.
            </div>
        </nav>

        @yield('content')
    </div>
</div>
@endsection
