@extends('cars.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h2>Update Cars</h2>
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
    {{dd($cars->id )}}
    <form method="post" action="{{ route('cars.update',[$cars->id]) }}" >
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="txtMake">Make:</label>
            <input type="text" class="form-control" id="txtMake" placeholder="Enter Make" name="txtMake">
        </div>
        <div class="form-group">
            <label for="txtModel">Model:</label>
            <input type="text" class="form-control" id="txtModel" placeholder="Enter Model Name" name="txtModel">
        </div>
        <div class="form-group">
            <label for="txtYear">Year:</label>
            <input type="text" class="form-control" id="txtYear" placeholder="Enter Year" name="txtYear">
        </div>
        <div class="form-group">
            <label for="formFile" class="form-label">Image:</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="form-group">
            <label for="txtPrice">Price:</label>
            <input type="text" class="form-control" id="txtPrice" placeholder="Enter Price" name="txtPrice">
        </div>
        <div class="form-group">
            <label for="txtSeats">Seats:</label>
            <input type="text" class="form-control" id="txtSeats" placeholder="Enter How Many Seats" name="txtseats">
        </div>
        <div class="form-group">
            <label for="txtSpecs">Specs:</label>
            <textarea class="form-control" id="txtpecs" name="txtSpecs" rows="10" placeholder="Enter Specs"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection