@extends('layouts.app')

@section('title')
  Product Show
@endsection
@section('content')
<div class="col-sm-12 text-center" style="background-color:lavender;">
<h1>Products orders by {{$user->name}}</h1>
    @foreach ($products as $product)
        Name: {{$product->name}}
        <br>
        Price: {{$product->price}}
        <br>
        Quantity:{{$product->pivot->quantity}}
        <br>
        <br>
    @endforeach
</div>
@endsection