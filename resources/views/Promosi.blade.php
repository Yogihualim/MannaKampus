<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promosi Page</title>

    @include('assets.scriptLink')
    @include('cssStyle.mainPageCSS')
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
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('bigevent')}}">
                                <i class="bi-exclamation-octagon pe-2 fw-2"></i>
                                Big Event
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('katalogjumat')}}">
                                <i class="bi-calendar2-day pe-2 fw-2"></i>
                                Katalog Jumat
                            </a>
                        </li>
                        <hr class="mx-3"/>
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('katalogtanggalmuda')}}">
                                <i class="bi-grid-fill pe-2 fw-2"></i>
                                Katalog Tanggal Muda
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('katalogevent')}}">
                                <i class="bi-grid-fill pe-2 fw-2"></i>
                                Katalog Event
                            </a>
                        </li>
                    </div>
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
