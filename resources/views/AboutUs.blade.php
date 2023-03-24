<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us Page</title>

    @include('assets.scriptLink')
    <link rel="stylesheet" type="text/css" href="{{ url('resources/css/mainStyle.css') }}">
</head>
<body>
    <!-- Navigation-->
    @include('component.Navbar')

    {{-- Kategoriaa --}}
    <br id="top"><br><br>
    {{-- Isi Sejarah --}}
    <div class="card p-4 m-4">
        <h2 class="fs-2">Tentang Kami - Manna Kampus (Mirota Kampus)</h2>
        <hr>
        <h5 class="fw-normal fs-6 lh-sm">
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6">
                    <div class="nav card py-2 px-1 text-start">
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('aboutus')}}"><i class="bi-archive pe-2 fw-2"></i>Sejarah Mirota</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('visimisi')}}"><i class="bi-postcard pe-2 fw-2"></i>Visi & Misi</a>
                        </li>


                        {{-- <hr class="mx-3"/>
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('customercare')}}"><i class="bi-person-exclamation pe-2 fw-2"></i>Customer Care</a>
                        </li> --}}
                    </div>
                    <br>
                </div>
                <div class="col-lg-9 col-md-6 text-start">
                    @yield('aboutUs')
                </div>
            </div>
        </h5>
        {{-- <div class="row gx-4 gx-lg-5">
            <div class="col-lg-3 col-md-6 text-center">
            </div>
            <div class="col-lg-6 col-md-6 text-start"> --}}
                    {{-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">1. Manna Kampus Babarsari (Jl. Raya Yogya – Solo Km. 7 Sleman, Telp. 0274-485288)</li>
                        <li class="list-group-item">2. Manna Kampus C. Simanjuntak (Jl. C. Simanjuntak 70 Yogyakarta, Telp. 0274-561254, 566608)</li>
                        <li class="list-group-item">3. Manna Kampus M. Supeno (Jl. Menteri Supeno 38 Yogyakarta, Telp. 0274-386797)</li>
                        <li class="list-group-item">4. Manna Kampus Palagan (Jl. Palagan Tentara Pelajar 31 Sleman, Telp. 0274-867145)</li>
                        <li class="list-group-item">5. Manna Kampus Godean (Jl. Godean Km. 2,8 Bantul, Telp. 0274-565612)</li>
                        <li class="list-group-item">6. Manna Kampus Imogiri (Jl. Imogiri Timur Km. 7 Bantul, Telp. 0274-4285579)</li>
                        <li class="list-group-item">7. Manna Kampus Peralatan Rumah Tangga (Jl. C. Simanjuntak 64 Yogyakarta)</li>
                        <li class="list-group-item">8. Manna Kampus Mini Pelemsewu (Jl. Pelemsewu No.C 1, Pandes, Bantul)</li>
                        <li class="list-group-item">9. Manna Kampus Mini Diro (Jl. Bantul No.8, Diro, Bantul)</li>
                        <li class="list-group-item">10. Manna Kampus Mini Minomartani (Jl. Kakap Raya, RT.019/RW.004, Minomartani, Sleman)</li>
                    </ul> --}}


            {{-- </div> --}}
        {{-- </div> --}}

    </div>

    {{-- Button To Top --}}
    @include('component.ButtonToTop')

    {{-- Contact Us --}}
    @include('componentMain.FooterContact')

    {{-- Footer --}}
    @include('component.Footer')
</body>
</html>
