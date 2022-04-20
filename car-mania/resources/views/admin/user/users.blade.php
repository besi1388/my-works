
    <x-app-layout>
  
    </x-app-layout>
    
    
    <!DOCTYPE html>
    <html lang="en">
      <head>
      
        @include("admin.admincss")
    
      </head>
      <body>
        <div class="container-scroller">  

             @include("admin.navbar")

             <div style="position: relative; top:100px; right: -200px">
                 <table class="table table-striped" bgcolor="teal" color="white" border="3px">
                     <tr>
                         <th style="padding: 30px">Name</th>
                         <th style="padding-left: 70px">Email</th>
                         <th style="padding: 30px">Action</th>
                     </tr>

                    @foreach($data as $data) 
                     <tr align="center" border="2px">
                        <td style="color:white">{{ $data->name }}</td>
                        <td style="color:white">{{ $data->email }}</td>

                        @if($data->usertype=='0')
                        <td style="color:rgb(247, 52, 18);"><a class="btn btn-danger" href="{{ url('/deleteuser', $data->id) }}">Delete</a></td>
                        @else
                        <td style="color:tomato"><a>Not Allowed</a></td>
                        @endif

                     </tr>
                     @endforeach
                 </table>
             </div>
             
        </div>      
            
        @include("admin.adminscript")
      </body>
    </html>
    
    

