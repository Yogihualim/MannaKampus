<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imogiri</title>

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
                            <a class="nav-link" id="Act" href="{{url('aboutus')}}"><i class="bi-archive pe-2 fw-2"></i>Sejarah Mirota</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('visimisi')}}"><i class="bi-postcard pe-2 fw-2"></i>Visi & Misi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('lokasi')}}"><i class="bi-geo-alt pe-2 fw-2"></i>Lokasi</a>
                        </li>
                        {{-- <hr class="mx-3"/>
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('customercare')}}"><i class="bi-person-exclamation pe-2 fw-2"></i>Customer Care</a>
                        </li> --}}
                    </div>
                    <br><br>
                </div>
                <div class="col-lg-9 col-md-6 text-start">
                    <ul class="breadcrumb text-dark ps-2">
                        <li class="breadcrumb-item"><a href="id">Home</a></li>
                        <li class="breadcrumb-item"><a href="lokasi">Lokasi</a></li>
                        <li class="breadcrumb-item active"><u>Manna Kampus Imogiri</u></li>
                    </ul>
                    <hr>
                    <!-- Map container -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.484935456774!2d110.3865790873856!3d-7.844205876326797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57b15cfb7e83%3A0x775553aa3fe92258!2sManna%20Kampus%20(Mirota%20Kampus)%20Imogiri!5e0!3m2!1sid!2sid!4v1678243127224!5m2!1sid!2sid"
                        width="1000" height="350" style="border-radius:10px; max-width:100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    {{--  --}}
                    <div class="card-body">
                        <h3 class="card-title">Manna Kampus Imogiri</h3>
                        <p class="card-text">Manna Kampus Imogiri mulai beroperasi mulai tahun 2021.
                            Manna Kampus Imogiri menyediakan aneka kebutuhan sehari-hari seperti produk-produk supermarket, buah & sayur, kosmetik,
                            perlengkapan sekolah & kantor, peralatan listrik dan pecah belah.
                            <br><br>
                            <i class="bi-signpost-split pe-0"></i>
                                Jl. Imogiri Tim. No.KM. 7, Grojogan, Wirokerten, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55194
                            <br><br>
                            <i class="bi-signpost-split pe-0"></i>
                                Telp: 0274-4285579
                            <br><br>
                            <i class="bi-signpost-split pe-0"></i>
                                Jam Operasional :
                                <br>
                                Senin - Minggu pukul 08.30 – 21.30 WIB
                            <br>
                        </p>
                        <div class="text-start">
                            <img src="public/maintenance/UM3.png" style="width:300px; height:250px; max-width: 100%" class="rounded" alt="...">
                            <img src="public/maintenance/UM3.png" style="width:300px; height:250px; max-width: 100%" class="rounded" alt="...">
                        </div>
                    </div>

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
