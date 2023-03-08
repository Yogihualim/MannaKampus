<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>

    @include('assets.scriptLink')
    @include('cssStyle.mainPageCSS')
</head>
<body id="page-top">
    {{-- Navigasi Bar --}}
    @include('component.Navbar')

    {{-- Judul Besar --}}
    @include('componentMain.MainTitle')

    {{-- Download Button --}}
    @include('componentMain.DownloadBtn')

    {{-- Parallax --}}
    @include('componentMain.Parallax')

    {{-- About Us --}}
    @include('componentMain.History')

    {{-- Button To Top --}}
    @include('component.ButtonToTop')


    {{-- Contact --}}
    <footer class="bg-light">
        <div class="container px-4 px-lg-5">
            {{-- <div class="small text-end">Contact Us
                <a class="btn btn-outline-dark btn-social mx-1 ms-3" href="#!"><i class="bi bi-twitter"></i></a>
                <a class="btn btn-outline-dark btn-social mx-1" href="#!"><i class="bi bi-whatsapp"></i></a>
                <a class="btn btn-outline-dark btn-social mx-1" href="#!"><i class="bi bi-envelope"></i></a>
            </div> --}}
        </div>
    </footer>

    {{-- Footer Contact Us --}}
    @include('componentMain.FooterContact')

    {{-- Footer --}}
    @include('component.Footer')
</body>
</html>
