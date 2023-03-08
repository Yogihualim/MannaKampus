<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us Page</title>

    @include('assets.scriptLink')
    @include('cssStyle.mainPageCSS')
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
                            <a class="nav-link" id="Act" href="{{url('lokasi')}}"><i class="bi-archive pe-2 fw-2"></i>Lokasi</a>
                        </li>
                    </div>
                    <br>
                </div>
                <div class="col-lg-9 col-md-6 text-start">
                    {{-- Lokasi Detail --}}
                    <h5 class="fw-normal fs-6 lh-sm">
                        <ul class="breadcrumb text-dark ps-2">
                            <li class="breadcrumb-item"><a href="id">Home</a></li>
                            <li class="breadcrumb-item active"><u>Lokasi</u></li>
                        </ul>
                        <hr>
                        <div class="row gx-8 gx-lg-10">
                            <div class="col-lg-4 col-md-6">
                                <div class="nav py-2 px-1 text-start">
                                    <div class="card px-2 pt-1 pb-0">
                                        <img class="img px-2" src="public/maintenance/UM3.png" style="height:60%; width:100%;" alt="..." title="">
                                        <div class="card-body">
                                            <h4 class="card-title">Manna Kampus Babarsari</h4>
                                            <p class="card-text pb-1">Jl. Raya Solo - Yogyakarta Jl. Babarsari No.KM. 7, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                                            <hr>
                                            <a href="1" class="btn ps-2"><i class="bi-three-dots-vertical pe-2 fw-2"></i>Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nav py-2 px-1 text-start">
                                    <div class="card px-2 pt-1 pb-0">
                                        <img class="img px-2" src="public/maintenance/UM3.png" style="height:60%; width:100%;" alt="..." title="">
                                        <div class="card-body">
                                            <h4 class="card-title">Manna Kampus C. Simanjuntak</h4>
                                            <p class="card-text pb-4">Jl. C. Simanjuntak No.70, Terban, Kec. Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55223</p>
                                            <hr>
                                            <a href="2" class="btn ps-2"><i class="bi-three-dots-vertical pe-2 fw-2"></i>Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nav py-2 px-1 text-start">
                                    <div class="card px-2 pt-1 pb-0">
                                        <img class="img px-2" src="public/maintenance/UM3.png" style="height:60%; width:100%;" alt="..." title="">
                                        <div class="card-body">
                                            <h4 class="card-title">Manna Kampus M. Supeno</h4>
                                            <p class="card-text pb-4">Jl. Menteri Supeno No.38, Sorosutan, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55162</p>
                                            <hr>
                                            <a href="3" class="btn ps-2"><i class="bi-three-dots-vertical pe-2 fw-2"></i>Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nav py-2 px-1 text-start">
                                    <div class="card px-2 pt-1 pb-0">
                                        <img class="img px-2" src="public/maintenance/UM3.png" style="height:60%; width:100%;" alt="..." title="">
                                        <div class="card-body">
                                            <h4 class="card-title">Manna Kampus Palagan</h4>
                                            <p class="card-text pb-1">Jl. Palagan Tentara Pelajar No.31, Mudal, Sariharjo, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</p>
                                            <hr>
                                            <a href="4" class="btn ps-2"><i class="bi-three-dots-vertical pe-2 fw-2"></i>Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nav py-2 px-1 text-start">
                                    <div class="card px-2 pt-1 pb-0">
                                        <img class="img px-2" src="public/maintenance/UM3.png" style="height:60%; width:100%;" alt="..." title="">
                                        <div class="card-body">
                                            <h4 class="card-title">Manna Kampus Godean</h4>
                                            <p class="card-text pb-4">Jl. Godean No.KM. 2.8, Ngestiharjo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55184</p>
                                            <hr>
                                            <a href="5" class="btn ps-2"><i class="bi-three-dots-vertical pe-2 fw-2"></i>Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nav py-2 px-1 text-start">
                                    <div class="card px-2 pt-1 pb-0">
                                        <img class="img px-2" src="public/maintenance/UM3.png" style="height:60%; width:100%;" alt="..." title="">
                                        <div class="card-body">
                                            <h4 class="card-title">Manna Kampus Imogiri</h4>
                                            <p class="card-text pb-1">Jl. Imogiri Tim. No.KM. 7, Grojogan, Wirokerten, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55194</p>
                                            <hr>
                                            <a href="6" class="btn ps-2"><i class="bi-three-dots-vertical pe-2 fw-2"></i>Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nav py-2 px-1 text-start">
                                    <div class="card px-2 pt-1 pb-0">
                                        <img class="img px-2" src="public/maintenance/UM3.png" style="height:60%; width:100%;" alt="..." title="">
                                        <div class="card-body">
                                            <h4 class="card-title">Manna Kampus Mini Pelemsewu</h4>
                                            <p class="card-text pb-1">Jl. Pelemsewu No.C 1, Pandes, Panggungharjo, Kec. Sewon, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55188</p>
                                            <hr>
                                            <a href="7" class="btn ps-2"><i class="bi-three-dots-vertical pe-2 fw-2"></i>Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nav py-2 px-1 text-start">
                                    <div class="card px-2 pt-1 pb-0">
                                        <img class="img px-2" src="public/maintenance/UM3.png" style="height:60%; width:100%;" alt="..." title="">
                                        <div class="card-body">
                                            <h4 class="card-title">Manna Kampus Mini Diro</h4>
                                            <p class="card-text pb-4">Jl. Bantul No.8, Diro, Pendowoharjo, Kec. Sewon, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55186</p>
                                            <hr>
                                            <a href="8" class="btn ps-2"><i class="bi-three-dots-vertical pe-2 fw-2"></i>Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nav py-2 px-1 text-start">
                                    <div class="card px-2 pt-1 pb-0">
                                        <img class="img px-2" src="public/maintenance/UM3.png" style="height:60%; width:100%;" alt="..." title="">
                                        <div class="card-body">
                                            <h4 class="card-title">Manna Kampus Mini Minomartani</h4>
                                            <p class="card-text pb-1">Jl. Kakap Raya, RT.019/RW.004, Mladangan, Minomartani, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581</p>
                                            <hr>
                                            <a href="9" class="btn ps-2"><i class="bi-three-dots-vertical pe-2 fw-2"></i>Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="nav py-2 px-1 text-start">
                                    <div class="card px-2 pt-1 pb-0">
                                        <img class="img px-2" src="public/maintenance/UM3.png" style="height:60%; width:100%;" alt="..." title="">
                                        <div class="card-body">
                                            <h4 class="card-title">Manna Kampus Peralatan Rumah Tangga</h4>
                                            <p class="card-text pb-4">Jl. C. Simanjuntak no. 64, Terban, Gondokusuman, Yogyakarta 55223</p>
                                            <hr>
                                            <a href="10" class="btn ps-2"><i class="bi-three-dots-vertical pe-2 fw-2"></i>Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </h5>
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

