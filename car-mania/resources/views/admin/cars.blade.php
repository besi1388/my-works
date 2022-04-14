
<x-app-layout>

</x-app-layout>
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Car list</title>


    @include("admin.admincss")
</head>
<body>
 
    
    <div class="container-scroller ">  
    
        @include("admin.navbar")
        
   

<div class="container  " >
    <br><br>
    <div class="">
        <div class="  mb-2">
            <a class="btn btn-success  " href="{{ url('create') }}">Add</a>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        
    @endif
    </div> 
    
    <div style=" overflow:auto;">

    <table class="table table-bordered text-center " style="color: white; ">
        <thead >
        <tr>
            <th>No</th>
            <th>Make</th>
            <th >Model</th>
            <th >Year</th>
            <th >Image</th>
            <th >Price</th>
            <th>Seats</th>
            <th >Specs</th>
            <th >Action</th>
        </tr>
        </thead>
        @php
            $i = 0;
        @endphp
        @foreach ($car as $cars)
        
            <tr>
                <td scope="row">{{ ++$i }}</td>
                <td scope="row">{{ $cars->make }}</td>
                <td scope="row">{{ $cars->model }}</td>
                <td scope="row">{{ $cars->year }}</td>
                <td><img style="height: 100px; width: 150px;" alt="image" src="{{ asset ('imgs/' .$cars->image )}}"> </td>
                <td>{{ $cars->price }}</td>
                <td>{{ $cars->seats }}</td>
                <td>{{ $cars->specs }}</td>
                <td>
                   
                        @csrf
                
            
                        
                 
    
                 
                
                
                    
                <form action="{{url('delete',$cars->id) }}" method="post">
                    <a href="{{ url('edit/'.$cars->id) }}" type="submit" class="btn btn-primary" >Edit</a>    
                    @csrf
                    @method('HEAD')
                   <button class="btn btn-danger  delete-confirm" data-name="{{ $cars->name }}" type="submit">Delete</button>
                  </form>
              </td>
            </tr>
            
        
        @endforeach
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
            <script>
            $('.delete-confirm').click(function(event) {
                var form =  $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                    title: `Are you sure you want to delete ${name}?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
            });
        </script>    
    </table>
</div>
</div>
      
    
    
      
</div>

    @include("admin.adminscript")

</body>
</html>



