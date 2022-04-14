@extends('cars.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Cars</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('cars') }}"> Back</a>
        </div>
    </div>
    @foreach($data as $cars)
    <table class="table table-bordered">
        <tr>
            <th>Make:</th>
            <td>{{ $cars->make }}</td>
        </tr>
        <tr>
            <th>Model:</th>
            <td>{{ $cars->model }}</td>
        </tr>
        <tr>
            <th>Year:</th>
            <td>{{ $cars->year }}</td>
        </tr>
        <tr>
            <th>Image:</th>
            <td>{{ $cars->image }}</td>
        </tr>
        <tr>
            <th>Price:</th>
            <td>{{ $cars->price }}</td>
        </tr>
        <tr>
            <th>Seats:</th>
            <td>{{ $cars->seats }}</td>
        </tr>
        <tr>
            <th>Specs:</th>
            <td>{{ $cars->specs }}</td>
        </tr>
 
    </table>
    @endforeach
@endsection