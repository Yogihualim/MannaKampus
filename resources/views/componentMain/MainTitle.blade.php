<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Title</title>
</head>
<body style="background-image:url(https://www.mirotakampus.com/resources/views/admin/images/5dd1acbf63083); position:relative;">
    {{-- <div style="background-color: #e77821"> --}}
    <div>
        <br id="top"><br><br><br><br>
        <header class="masthead">
            <div class="container px-2">
                <div class="row gx-3 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <img class="img" src="{{ env("APP_URL")."/public/Logo_Tulisan_Manna_Kampus.png" }}" height="60" alt="..." title="">
                            {{-- <img class="navbar-brand" src="https://www.mirotakampus.com/resources/views/themes/plugin/images/logo.png" height="70" alt="CoolBrand"> --}}
                            {{-- <h1 class="display-1 mb-3 fw-bold text-white">Manna Kampus</h1> --}}
                            <p class="lead fw-normal mb-3 text-white fw-semibold">Alternatif belanja berbagai macam produk dalam satu situs untuk memenuhi semua kebutuhan konsumen.</p>
                            <a class="btn btn-xl text-white" style="background-color:#e77823;" href="https://www.mirotakampus.com/id">Belanja Sekarang!</a>
                            <p class="lead fw-normal mb-2 text-white fw-semibold"><br><br>Tersedia di Android & IOs<br>Download Sekarang!<br><br>
                                <a href="https://apps.apple.com/id/app/manna-kampus/id1584928138?l=id"><img class="app-badge" style="width: 145px;" src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="..." /></a>
                                <a href="https://play.google.com/store/apps/details?id=com.mirotakampus.mkonline"><img class="app-badge" style="width: 175px;" src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png" alt="..." /></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                <img src="https://lelogama.go-jek.com/post_thumbnail/promo-gomart-feb-2023.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="https://lelogama.go-jek.com/post_thumbnail/promo-gomart-feb-2023.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="https://lelogama.go-jek.com/post_thumbnail/promo-gomart-feb-2023.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </header>
        <br><br>
        <section class="page-section pb-5 text-white" id="services" style="background-color: #e77821">
        <br><br>
        <div class="container px-4 px-lg-5">
            <h2 class="text-center mt-0">Online Service</h2>
            <hr class="divider" />
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-gem fs-1 text-white"></i></div>
                        <h3 class="h4 mb-2">Layanan Pengiriman</h3>
                        <p class="mb-0">Door To Door Daerah Istimewa Yogyakarta.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-laptop fs-1 text-white"></i></div>
                        <h3 class="h4 mb-2">Garansi Terbaik</h3>
                        <p class="mb-0">Produk Berkualitas.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-globe fs-1 text-white"></i></div>
                        <h3 class="h4 mb-2">Order 24 jam</h3>
                        <p class="mb-0">Bisa Order Kapan Saja</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="mt-5">
                        <div class="mb-2"><i class="bi-heart fs-1 text-white"></i></div>
                        <h3 class="h4 mb-2">Harga Termurah</h3>
                        <p class="mb-0">Di Jamin Harga Murah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</body>
</html>