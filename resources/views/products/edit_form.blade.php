@extends('layouts.app')

@section('title')
  Edit Form
@endsection
@section('content')
<div class="col-sm-12 text-center" style="background-color:lavender;">
@if (count($errors) > 0)
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/product/{{$product->id}}">
        {{csrf_field()}}
        {{ method_field('PUT') }}
        <img src="{{url($product->image)}}" alt="product image" style="width:200px;height:200px;">
        </p><label>Name</label>
        <input type="text" name="name" value="{{$product->name}}"></p>
        <p><label>Price</label>
        <input type="text" name="price" value="{{$product->price}}"><br></p>
        <p><label>Description: </label><br>
         <input type="text" name="description" value="{{$product->description}}"><br></p>
        <p><label>URL: </label><br>
         <input type="url" name="link" value="{{$product->link}}" placeholder="https://example.com"  pattern="https://.*"><br></p>
        <p><select name="manufacturer">
        @foreach ($manufacturers as $manufacturer)
            @if($manufacturer->id == $product->manufacturer_id)
                <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option>
            @else
                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
            @endif
        @endforeach
        </select>
    <input type="submit" value="Update">
    </form>
</div>
@endsection





