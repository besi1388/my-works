<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            @foreach ($car as $data)

            <tbody>
              <tr>
                <th scope="row"><td>{{ ++$i }}</td></th>
                <td><td>{{ $data->category }}</td></td>
                <td>

                    @csrf
                    
                    <form action="{{url('delete',$data->id) }}" method="post">
                        <a href="{{ url('edit/'.$data->id) }}" type="submit" class="btn btn-primary" >Edit</a>    
                        @csrf
                        @method('HEAD')
                       <button class="btn btn-danger  delete-confirm" data-name="{{ $data->category }}" type="submit">Delete</button>
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