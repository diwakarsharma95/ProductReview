@extends('layouts.app')

@section('title')
  Review Show
@endsection
@section('content')
<div class="col-sm-12 text-center" style="background-color:lavender;">
        <b>Review:</b> {{$review->review}}<br>
        <b>Rating:</b> {{$review->rating}}<br>
        <b>Posted by:</b> {{$review->user->fname}}<br>
        <b>Created at:</b> {{Carbon\Carbon::parse($review->creation_date)}}<br>
        <b>Updated at:</b> {{Carbon\Carbon::parse($review->creation_date)->diffForHumans()}}
        <p></p>        
        <p><button><a href='/product/{{$product->id}}/review/{{$review->id}}/edit'>Edit Review</a></button></p>
        <p><button><a href='{{url("product/{$product->id}/review/{$review->id}/like")}}'>Like({{$likeCtr}})</a></button></p>
        <p><button><a href='{{url("product/{$product->id}/review/{$review->id}/dislike")}}'>Dislike({{$dislikeCtr}})</a></button></p>
        
         <form method="POST" action="/product/{{$product->id}}/review/{{$review->id}}">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <input type="submit" value="Delete">
        </form>
</div>
@endsection