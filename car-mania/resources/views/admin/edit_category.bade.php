
@extends('cars.layouts.app')
 
 @section('content')
 
     <div class="row">
         <div class="col-lg-11"><br><br>
             <h2>Update Cars</h2>
         </div><br><br>
         <div class="col-lg-1"><br><br>
             <a class="btn btn-primary" href="{{ url('cars') }}"> Back</a>
         </div>
     </div><br><br>
  
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
    
     <form action="{{ url('update/'.$cars->id) }}" method="POST" enctype="multipart/form-data">
         @csrf
 
         @method('PUT')
         <div class="form-group">
             <label for="txtMake">Make:</label>
             <input type="text" class="form-control" id="make" placeholder="Enter Make" name="make" value="{{ $cars->make}}">
         </div> <br>
         <div class="form-group">
             <label for="txtModel">Model:</label>
             <input type="text" class="form-control" id="model" placeholder="Enter Model Name" name="model" value="{{ $cars->model}}">
         </div><br>
         <div class="form-group">
             <label for="txtYear">Year:</label>
             <input type="text" class="form-control" id="year" placeholder="Enter Year" name="year" value="{{ $cars->year}}">
         </div><br>
         <div class="form-group">
             <label for="image" class="form-label">Image:</label>
             <input class="form-control" name="image" type="file" id="image">
         </div><br> 
         <div class="form-group">
             <label for="txtPrice">Price:</label>
             <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" value="{{ $cars->price}}">
         </div><br>
         <div class="form-group">
             <label for="txtSeats">Seats:</label>
             <input type="text" class="form-control" id="seats" placeholder="Enter How Many Seats" name="seats" value="{{ $cars->seats}}">
         </div><br>
         <div class="form-group">
             <label for="txtSpecs">Specs:</label>
             <input class="form-control" id="specs" name="specs" rows="10" placeholder="Enter Specs" value="{{ $cars->specs}}">
         </div><br>
         <button type="submit" >Update</button>
     </form>
 @endsection