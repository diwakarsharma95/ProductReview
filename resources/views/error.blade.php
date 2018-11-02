@extends('layouts.app')
@section('title')
Products
@endsection
@section('content')
<div class="col-sm-12 text-center" style="background-color:lavender;">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top text-center">
            <div class="container">
                'No Details found. Try to search again !'
            </div>
        </nav>

        @yield('content')
    </div>
</div>
@endsection
