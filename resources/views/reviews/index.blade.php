@extends('layouts.app')
@section('title')
Reviews
@endsection
@section('content')
<div class="col-sm-12 text-center" style="background-color:lavender;">
    @foreach ($reviews as $review)
        <a href="/product/{{$product->id}}/review/{{$review->id}}"><li>{{ $review->review }}</li></a>
    @endforeach
    <br>
<p><button><a href='/product/{{$product->id}}/review/create'>Create Review</a></button></p>
</div>
@endsection