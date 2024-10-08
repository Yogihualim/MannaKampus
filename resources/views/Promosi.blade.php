<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promosi Page</title>

    {{-- Link untuk koneksi CSS --}}
    <link rel="stylesheet" type="text/css" href="{{ url('resources/css/mainStyle.css') }}">

    {{-- Link untuk javascript --}}
    @include('assets.scriptLink')
</head>
<body>
    <!-- Navigation-->
    @include('component.Navbar')

    {{-- a --}}
    <br id="top"><br><br>
    {{-- Isi Sejarah --}}
    <div class="card p-4 m-4">
        <h2 class="fs-2">Promosi - Manna Kampus (Mirota Kampus)</h2>
        <hr>
        <h5 class="fw-normal fs-6 lh-sm">
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6">
                    <div class="nav card py-2 px-1 text-start">
                        {{-- Button Big Event --}}
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('big-event')}}">
                                <i class="bi-exclamation-octagon pe-2 fw-2"></i>
                                Big Event
                            </a>
                        </li>
                        {{-- Button Katalog Jumat --}}
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('katalog-jumat')}}">
                                <i class="bi-calendar2-day pe-2 fw-2"></i>
                                Katalog Jumat
                            </a>
                        </li>
                        <hr class="mx-3"/>
                        {{-- Button Tanggal Muda --}}
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('katalog-tanggal-muda')}}">
                                <i class="bi-grid-fill pe-2 fw-2"></i>
                                Katalog Tanggal Muda
                            </a>
                        </li>
                        {{-- Katalog Event --}}
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('katalog-event')}}">
                                <i class="bi-grid-fill pe-2 fw-2"></i>
                                Katalog Event
                            </a>
                        </li>
                    </div>
                    <br>
                </div>
                <div class="col-lg-9 col-md-6 text-start">
                    @yield('contentPromosi')
                </div>
            </div>
        </h5>
    </div>

    {{-- Button To Top --}}
    @include('component.ButtonToTop')

    {{-- Contact Us --}}
    @include('componentMain.FooterContact')

    {{-- Footer --}}
    @include('component.Footer')
</body>
</html>
