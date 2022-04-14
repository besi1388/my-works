@extends('cars.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Cars list</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-success" href="{{ route('cars.create') }}">Add</a>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
 
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Make</th>
            <th>Model</th>
            <th>Year</th>
            <th>Image</th>
            <th>Price</th>
            <th>Seats</th>
            <th>Specs</th>
            <th width="280px">Action</th>
        </tr>
        @php
            $i = 0;
        @endphp
        @foreach ($cars as $cars)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $cars->make }}</td>
                <td>{{ $cars->model }}</td>
                <td>{{ $cars->year }}</td>
                <td>{{ $cars->image }}</td>
                <td>{{ $cars->price }}</td>
                <td>{{ $cars->seats }}</td>
                <td>{{ $cars->specs }}</td>
                <td>
                    <form action="{{ route('cars.destroy',$cars->id) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('cars.show',$cars->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('cars.edit',$cars->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

