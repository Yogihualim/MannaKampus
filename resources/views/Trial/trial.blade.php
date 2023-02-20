<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

@include('assets.scriptLink')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@include('Trial.strail')
</head>
<body>

<div class="header" style="background-image:url(https://www.mirotakampus.com/resources/views/admin/images/5dd1acbf63083); position:relative;">
    {{-- <br id="top"><br><br><br><br><br> --}}
    <div class="container px-2">
        <div class="row gx-3 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 mb-4" ><img src="https://www.mirotakampus.com/resources/views/themes/plugin/images/logo.png" height="60" alt=""></h1>
                    
                    <p class="lead fw-normal mb-3 text-white">Alternatif belanja berbagai macam produk dalam satu situs untuk memenuhi semua kebutuhan konsumen.</p>
                    <a class="btn btn-xl text-white" style="background-color:hsl(26, 80%, 52%);" href="https://www.mirotakampus.com/id">Belanja Sekarang!</a>
                    <p class="lead fw-normal mb-2 text-white"><br><br>Tersedia di Android & IOs<br>Download Sekarang!<br><br>
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
    </div>
    <br>
</div>

<div class="navbar" id="myTopnav">
    <a href="#home"><img src="https://www.mirotakampus.com/resources/views/themes/plugin/images/logo.png" height="25" alt=""></a>
    <div class="justify-content-end">
        <a href="javascript:void(0);" class="icon" onclick="myFunctio()">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
    </div>
</div>

{{-- Sejarah --}}
@include('componentMain.History')

{{-- <div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>More Text</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div><br>
    <div class="fakeimg" style="height:60px;">Image</div>
  </div>
  <div class="main">
    <h2>TITLE HEADING</h2>
    <h5>Title description, Dec 7, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    <br>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div> --}}

<div class="footer">
  
</div>
@include('componentMain.FooterContact')

@include('component.Footer')

</body>
</html>
