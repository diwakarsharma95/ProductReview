@extends('layouts.app')

@section('title')
  Edit Form
@endsection
@section('content')
<div class="col-sm-12 text-center" style="background-color:lavender;">
<h1>Edit Review</h1>
   @if (count($errors) > 0)
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="/product/{{$product->id}}/review/{{$review->id}}" enctype="multipart/form-data">
        {{csrf_field()}}
        {{method_field('PUT')}}
        <p><label>Rating</label>
        <input type="text" name="rating" value="{{$review->rating}}"><br></p>
        
        <p><label>Review</label>
        <input type="text" name="review" value="{{$review->review}}"><br></p>
        </select>
    <input type="submit" value="Update">
    </form>
</div>
@endsection
