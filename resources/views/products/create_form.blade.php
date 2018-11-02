@extends('layouts.app')

@section('title')
  Create Item Form
@endsection
@section('content')
 <div class="col-sm-12 text-center" style="background-color:lavender;">
    <h1>Create a New Product</h1>
    @if (count($errors) > 0)
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    
    <form class="form-group" method="POST" action="/product" enctype="multipart/form-data">
        {{csrf_field()}}
        <p><label>Name: </label><input type="text" name="name" value="{{old('name')}}"></p>
        <p><label>Price: </label><input type="text" name="price" value="{{ old('price')}}"></p>
        <label>Description: </label>
        <textarea class="form-control" name="description" value="{{ old('description')}}" rows="5" ></textarea><br>
        <p><label>URL: </label><input type="url" name="link" value="{{ old('link')}}" placeholder="https://example.com"  pattern="https://.*"></p>
        <p><select class="form-control" name="manufacturer">
        @foreach ($manufacturers as $manufacturer)
            @if($manufacturer->id == old('manufacturer'))
                <option value="{{$manufacturer->id}}" selected="selected">{{$manufacturer->name}}</option>
            @else
                <option value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
            @endif
        @endforeach
        </select></p>
        <p><input type="file"name="image"></p>
        <input class="btn btn-default" type="submit" value="Create">
    </form>
</div>
@endsection