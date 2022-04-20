<x-app-layout>

</x-app-layout>


@include("admin.admincss")


<div class="container-scroller "> 

    @include("admin.navbar")


    <div class="container  m-5">
      
        <br>  
 
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

        @foreach ($categories as $category)
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="categories[]"
                   value="{{ $category->id }}">
            <label class="form-check-label" for="inlineCheckbox1">
                {{ $category->category}}</label>
        </div>
    @endforeach
        
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
    </div>
</div>

@include("admin.adminscript")

