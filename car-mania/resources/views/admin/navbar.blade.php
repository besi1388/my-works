

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <!-- partial:partials/_sidebar.html -->
  <nav class="sidebar sidebar-offcanvas " id="sidebar" >
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Besjan Bardhollari</h5>
              <span>Gold Member</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            
            
              
             
            
          
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/users') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">User</span>
        </a>
      </li>
     
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/cars') }}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Cars</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/category') }}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Categories</span>
        </a>
      </li>
    
    </ul>
  </nav>


</body>
</html>
    