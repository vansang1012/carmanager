@extends('home')

@section('title')
    Form create car
    @endsection()

@section('content')
    <form method="post" action="{{route('motobike.store')}}">
        @csrf
        <div class="form-group">
            <label for="email">Name</label>
            <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="pwd">Price</label>
            <input type="text" class="form-control" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
