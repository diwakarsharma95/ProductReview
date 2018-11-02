@extends('layouts.app')
@section('title')
Products
@endsection
@section('content')

<div class="container">
  <div class="jumbotron text-center">
    <h1>Product List</h1>      
  </div>
</div>
 <div class="col-sm-12 text-center" style="background-color:lavender;">
    @foreach ($products as $product)
        <a href="/product/{{$product->id}}"><li>{{$product->name}}</li></a>
    @endforeach

<div  class="col-sm-12 text-center">
<button><a href = "/product/create">Create</a></button>
</div>
</div>
@endsection