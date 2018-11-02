@extends('layouts.app')

@section('title')
  Create Review Form
@endsection
@section('content')
<div class="col-sm-12 text-center" style="background-color:lavender;">
<h1>Create a New Review</h1>
<form  method="POST" action="/product" enctype="multipart/form-data">
  
  
</form> 
   @if (count($errors) > 0)
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/product/{{$product->id}}/review" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <p><label>Rating: </label><input type="text" name="rating" value="{{old('rating')}}" placeholder="Out of 5"></p>
        <p><label>Review: </label><input type="text" name="review" value="{{ old('review')}}"></p>
        <input type="submit" value="Create">
    </form>
</div>
@endsection