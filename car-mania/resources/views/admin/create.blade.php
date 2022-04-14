@extends('cars.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Add New Car</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('cars') }}"> Back</a>
        </div>
    </div>
 
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ url('add') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="Make">Make:</label>
            <input type="text" class="form-control" id="make" placeholder="Enter Make" name="make">
        </div>
        <div class="form-group">
            <label for="Model">Model:</label>
            <input type="text" class="form-control" id="model" placeholder="Enter Model Name" name="model">
        </div>
        <div class="form-group">
            <label for="Year">Year:</label>
            <input type="text" class="form-control" id="year" placeholder="Enter Year" name="year">
        </div>

        <div class="form-group" for="Category">Category:
            <label for="Category">Electric:</label>
            <input  id="category" name="diesel" type="checkbox" value="" >
            <label for="Category">Diesel:</label>
            <input  id="category" name="category" type="checkbox" value="" >
            <label for="Category">Hybrid:</label>
            <input  id="category" name="category" type="checkbox" value="" >
            
        </div>
        
        <div class="form-group">
            <label for="Price">Price:</label>
            <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price">
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Image:</label>
            <input class="form-control" name="image" type="file" id="image">
            
        </div>
        <div class="form-group">
            <label for="Seats">Seats:</label>
            <input type="text" class="form-control" id="seats" placeholder="Enter How Many Seats" name="seats">
        </div>
        <div class="form-group">
            <label for="Specs">Specs:</label>
            <input type="text"  class="form-control" id="specs" name="specs" rows="10" placeholder="Enter Specs">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection