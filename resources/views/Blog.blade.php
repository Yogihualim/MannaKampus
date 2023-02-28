<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Page</title>

    @include('assets.scriptLink')
    @include('cssStyle.mainPageCSS')
</head>
<body>
    <!-- Navigation-->
    @include('component.Navbar')

    {{-- a --}}
    <br id="top"><br><br><br>
    {{-- Isi Sejarah --}}
    <div class="card p-4 m-4">
        <h2 class="fs-2">Blog - Manna Kampus (Mirota Kampus)</h2>
        <hr>
        <h5 class="fw-normal fs-6 lh-sm">
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6">
                    <div class="nav card py-2 px-1 text-start">
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('infopelanggan')}}">
                                <i class="bi-people pe-2 fw-2"></i>
                                Info Pelanggan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('resepdapur')}}">
                                <i class="bi-ui-checks pe-2 fw-2"></i>
                                Resep Dapur
                            </a>
                        </li>
                        <hr class="mx-3"/>
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('seputarproduk')}}">
                                <i class="bi-info-circle pe-2 fw-2"></i>
                                Seputar Produk
                            </a>
                        </li>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 text-start">
                    @yield('contentBlog')
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