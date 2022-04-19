
@extends('cars.layouts.app')
 


    <div class="row">
        <div class="col-lg-11"><br><br>
            <h2>Update Categories</h2>
        </div><br><br>
        <div class="col-lg-1"><br><br>
            <a class="btn btn-primary" href="{{ url('category') }}"> Back</a>
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
   
    <form action="{{ url('update/'.$category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf

        @method('PUT')
     
        <div class="form-group">
            <label for="category">Category:</label>
            <input type="text" class="form-control" id="category" placeholder="Enter category Name" name="category" value="{{ $category->}}">
        </div><br>
       <br>
        <button type="submit" >Update</button>
    </form>
