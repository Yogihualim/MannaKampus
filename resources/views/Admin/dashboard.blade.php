<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>

    <link href="resources/css/styles.css" rel="stylesheet" />
    @include('assets.scriptLink')

</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Start Bootstrap</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="admin">Profil</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="katalog_jumat">Katalog Jumat</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="katalog_tanggal_muda">Katalog Tanggal Muda</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="katalog_event"> Katalog Events</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a>
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle"><i class="bi bi-list"></i> Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="admin">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('logoutaksi') }}"><i class="bi bi-power"></i>  Log Out</a></li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Action</a>
                                    <a class="dropdown-item" href="#!">Another action</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid">
                <div class="container">
                    @yield('Katalogs')
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="sidebar">
        <p class="ps-3 pt-4 py-3 fw-bold" style="background-color: orange">
            {{ Auth::user()->name }}
            <br>
            {{ Auth::user()->email }}
        </p>
        <a href="katalog_jumat">Katalog Jumat</a>
        <a href="katalog_tanggal_muda">Katalog Tanggal Muda</a>
        <a href="katalog_event">Katalog Event</a>
        <a href="{{ route('logoutaksi') }}">
            <i class="fa fa-power-off"></i>
            Log Out
        </a>
    </div>
    <div class="content">
        <div class="container">
            @yield('Katalogs')
        </div>
    </div> --}}

  {{--  --}}
  {{-- <div class="row g-0">
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
            <a href="katalog_tanggal_muda">Katalog Tanggal Muda</a>
            <a href="katalog_event">Katalog Event</a>
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
  </div> --}}

</body>
</html>

<script>
    window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});
</script>
