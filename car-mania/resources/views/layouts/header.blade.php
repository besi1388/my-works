
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LUXURYcars</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              
            </ul>


           
          </div>
        </div>
        
        <ul class="d-flex flex-row ">
          <li>
            @if (Route::has('login'))
            <div class="collapse navbar-collapse flex justify-content-end">
                @auth
                    <li><x-app-layout>
  
                         </x-app-layout>
                    </li>
                @else
                  <li class="navbar-nav">  <a href="{{ route('login') }}" class="nav-link">Login</a></li>
  
                    @if (Route::has('register'))
                    <li class="navbar-nav"> <a href="{{ route('register') }}" class="nav-link">Register</a></li>
                    @endif
                @endauth
            </div>
              @endif
          </li>
        </ul>
        

      </nav>