@extends('home')

@section('title')
    Hien Thi Danh Sach
@endsection

@section('content')
    <div class="container">
        <h2>Danh Sach Xe</h2>

        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cars as $key=>$value )
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->price}}</td>
                    <td><a href="{{route('car.update',$value->id)}}">Update</a></td>
                    <td><a href="{{route('car.delete',$value->id)}}">Delete</a></td>
                </tr>

            @endforeach
            </tbody>
        </table>
        <button class="btn btn-lg btn-light"><a href="{{route('car.create')}}">Add Car</a></button>
    </div>
@endsection
