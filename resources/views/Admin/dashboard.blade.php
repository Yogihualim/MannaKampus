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
  {{--  --}}
  <div class="row g-0">
    <div class="col-lg-3">
        <div class="sidenav">
            <img class="img ps-3 py-3" src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" style="border-radius: 50%; max-width:20%;">
            <h6 class="ps-3 text-white">
                <p>Nama: {{ Auth::user()->name }}
                <br>
                Email: {{ Auth::user()->email }}</p>
            </h6>
        <hr>
            <a href="katalog_jumat">Katalog Jumat</a>
            <a href="katalog_tanggalmuda">Katalog Tanggal Muda</a>
            <a href="{{ route('logoutaksi') }}">
                <i class="fa fa-power-off"></i>
                Log Out
            </a>
      </div>
    </div>
    <div class="col-lg-9">
      <div class="container">
          @yield('Katalogs')
      </div>
    </div>
    <footer class="bg-light py-2">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Mirota Kampus. All Rights Reserved.</div></div>
    </footer>
  </div>

</body>
</html>
