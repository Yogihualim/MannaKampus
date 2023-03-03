<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>

    @include('assets.scriptLink')
    @include('cssStyle.mainPageCSS')
</head>
<body>
  <!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav d-flex">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fa fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Help
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
        <a class="dropdown-item" href="#">FAQ</a>
        <a class="dropdown-item" href="#">Support</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Contact</a>
      </div>
    </li>
  </ul>

</nav>
<!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-3">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="public/Logo_Tulisan_Manna_Kampus.png" alt="AdminLTE Logo" class="brand-image"
          style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <div class="sidenav">
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#clients">Clients</a>
            <a href="#contact">Contact</a>
        </div>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  {{--  --}}
  {{-- <div class="row">
    <div class="col-lg-3">
      <div class="sidenav">
        <a class="img-icon" href="#">
          <img class="img ps-3 py-3" src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" style="border-radius: 50%; max-width:30%;">
          <i>Login</i>
        </a>
        <hr>
          <a href="#about">About</a>
          <a href="#services">Services</a>
          <a href="#clients">Clients</a>
          <a href="#contact">Contact</a>
      </div>      
    </div>
    <div class="col-lg-8">
      <div class="container">
          @yield('1.ktg_Jumat')
      </div>
    </div>
    <footer class="bg-light py-2">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Mirota Kampus. All Rights Reserved.</div></div>
    </footer>
  </div> --}}

</body>
</html>