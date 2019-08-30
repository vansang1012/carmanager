@extends('home')

@section('title')
    Form Update Car
@endsection()

@section('content')
    <form  method="post" action="{{route('car.edit')}}">
        @csrf
        <div class="form-group">
            <label for="email">ID</label>
            <input type="text" class="form-control" name="id" value="{{$car->id}}">
        </div>
        <div class="form-group">
            <label for="email">Name</label>
            <input type="text" class="form-control" name="name" value="{{$car->name}}">
        </div>
        <div class="form-group">
            <label for="pwd">Price</label>
            <input type="text" class="form-control" name="price" value="{{$car->price}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
