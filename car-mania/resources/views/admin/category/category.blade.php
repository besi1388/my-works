<x-app-layout>

</x-app-layout>

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
    <title>Category</title>

    @include("admin.admincss")
</head>
<body>

    <div class="container-scroller ">  
    
        @include("admin.navbar")

        
        <div class="container me-3">
<br><br>
        <table class="table table-bordered mt-5  text-center" style="color: white;">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
                
              </tr>
            </thead>

            @php
            $i = 0;
            @endphp
            @foreach ($categories as $category)

            <tbody>
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $category->category}}</td>
                <td>

                    @csrf
                    
                    <form action="{{url('delete',$category->id) }}" method="post">
                        <a href="{{ url('edit_category'.$category->id) }}" type="submit" class="btn btn-primary" >Edit</a>    
                        @csrf
                        @method('HEAD')
                       <button class="btn btn-danger  delete-confirm" data-name="{{ $category->name }}" type="submit">Delete</button>
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

    @include("admin.adminscript")
</body>
</html>