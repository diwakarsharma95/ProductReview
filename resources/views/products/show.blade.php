@extends('layouts.app')

@section('title')
  Product Show
@endsection
@section('content')
<div class="col-sm-12 text-center" style="background-color:lavender;">
    <h1>{{$product->name}}</h1>
    <img src="{{url($product->image)}}" alt="product image" style="width:200px;height:200px;">
    <p><b>Price: </b>{{$product->price}}</p>
    <p><b>Manufacturer: </b>{{$product->manufacturer->name}}</p>
    <p><b>Description: </b><br>{{$product->description}}</p>
    <p><b>URL: </b><a href="{{$product->link}}" target="_blank">{{$product->link}}</a></p>
    
    <p><button><a href='/product/{{$product->id}}/review/'>See Reviews</a></button></p>
    <p><button><a href='/product/{{$product->id}}/edit'>Edit Product</a></button></p>
    <p>
        <form method="POST" action="/product/{{$product->id}}">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form>
    </p>
</div>
@endsection