<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="{{ url('resources/css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('resources/css/adminStyle.css') }}">
    @include('assets.scriptLink')

</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">
                Manna Kampus
            </div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('dashboard') }}">Profil</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('homepage.index') }}">Homepage Carousel</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('katalog_jumat.index') }}">Katalog Jumat</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('katalog_tanggal_muda.index') }}">Katalog Tanggal Muda</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('katalog_event.index') }}">Katalog Event</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('big_event.index') }}">Big Event</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('info_lowongan.index') }}">Info Lowongan</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{ route('hasil_test.index') }}">Hasil Test</a>
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
                            <li class="nav-item active"><a class="nav-link" href="{{ route('dashboard') }}">Home</a></li>
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
                    <br>
                    <?php
                        $t = date("H:i:s, l");
                            echo $t . "<br>";
                        if ($t < "10") {
                            echo "Have a good morning!";
                        } elseif ($t < "8") {
                            echo "Have a good day!";
                        } else {
                            echo "Have a good night!";
                        }
                    ?>
                    <hr>
                    @yield('Katalogs')
                    <hr>

                </div>
            </div>
        </div>
    </div>
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
