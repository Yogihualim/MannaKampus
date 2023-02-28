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
  <div class="row">
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
  </div>

</body>
</html>