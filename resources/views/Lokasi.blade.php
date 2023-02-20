<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lokasi Maps Page</title>

    @include('assets.scriptLink')
</head>
<body>
    <!-- Navigation-->
    @include('component.Navbar')
    
    {{-- Google Maps --}}

    <br id="top"><br><br>
    {{-- Isi Sejarah --}}
    <div class="card p-4 m-4">
        <h2 class="fs-2">Blog - Manna Kampus (Mirota Kampus)</h2>
        <hr>
        <h5 class="fw-normal fs-6 lh-sm">
            @include('componentLokasi.LokasiDetail')
        </h5>
    </div>
    {{-- Isi Sejarah --}}

    {{-- Button To Top --}}
    @include('component.ButtonToTop')

    {{-- Contact Us --}}
    @include('componentMain.FooterContact')

    {{-- Footer --}}
    @include('component.Footer')
</body>
</html>