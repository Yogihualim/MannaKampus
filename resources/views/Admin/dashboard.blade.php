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
    {{-- <div class="container">
        <div class="col-md-12">
            <nav class="navbar">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-4" aria-expanded="false">
                            <span class="fa fa-instagram">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <a class="navbar-brand" href="admin">Home</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-user"></i>
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a>Level: {{ Auth::user()->role }}</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('logoutaksi') }}">
                                            <i class="fa fa-power-off"></i>
                                            Log Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            @yield('1.ktg_Jumat')

        </div>
    </div> --}}
  {{--  --}}
  <div class="row">
    <div class="col-lg-3 d-block" style="height:100%">
        <div class="sidenav">
            <img class="img ps-3 py-3" src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" style="border-radius: 50%; max-width:20%;">
            <h6 class="ps-3 text-white">
                <p>Nama: {{ Auth::user()->name }}
                <br>
                Email: {{ Auth::user()->email }}</p>
            </h6>
        <hr>
            <a href="katalog_jumat">Katalog Jumat</a>
            <a href="#services">Services</a>
            <a href="#clients">Clients</a>
            <a href="#contact">Contact</a>
            <a href="{{ route('logoutaksi') }}">
                <i class="fa fa-power-off"></i>
                Log Out
            </a>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="container">
          @yield('1.ktg_Jumat')
      </div>
    </div>
    <footer class="bg-light py-2" style="flex-shrink: none; height:100%; position:statis;">
        <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2023 - Mirota Kampus. All Rights Reserved.</div></div>
    </footer>
  </div>

</body>
</html>
