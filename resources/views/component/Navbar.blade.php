<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar</title>

    @include('cssStyle.mainPageCSS')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top" id="mainNav" style="background-color: white">
        <div class="container px-4 px-lg-5" >
            <img class="navbar-brand" src="https://www.mirotakampus.com/resources/views/themes/plugin/images/logo.png" height="45" alt="CoolBrand">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="id">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="promosi">Promosi</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog">Blog</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Karir</a>
                        <ul class="dropdown-menu px-3">
                            <li><a class="dropdown-item" href="karir">Info Lowongan</a></li>
                            <li><a class="dropdown-item" href="karir">Hasil Tes</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Event</a></li>
                            <li><a class="dropdown-item" href="#">Other</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Contact Us</a>
                        <ul class="dropdown-menu px-3">
                            <li><a class="dropdown-item" href="onlineshop">Online Shop</a></li>
                            <li><a class="dropdown-item" href="aboutus">About Us</a></li>
                            <li><a class="dropdown-item" href="lokasi">Lokasi</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="customercare">Customer Care</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
</body>
</html>