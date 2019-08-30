@extends('home')

@section('title')
    Form Edit Motobike
@endsection()

@section('content')
    <form  method="post" action="{{route('motobike.update')}}">
        @csrf
        <div class="form-group">
            <label for="email">ID</label>
            <input type="text" class="form-control" name="id" value="{{$motobike->id}}">
        </div>
        <div class="form-group">
            <label for="email">Name</label>
            <input type="text" class="form-control" name="name" value="{{$motobike->name}}">
        </div>
        <div class="form-group">
            <label for="pwd">Price</label>
            <input type="text" class="form-control" name="price" value="{{$motobike->price}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
