<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Karir Page</title>

    @include('assets.scriptLink')
</head>
<body>
    <!-- Navigation-->
    @include('component.Navbar')

    {{-- a --}}
    <br id="top"><br><br>
    {{-- Isi Sejarah --}}
    <div class="card p-4 m-4">
        <h2 class="fs-2">Karir - Manna Kampus (Mirota Kampus)</h2>
        <hr>
        <h5 class="fw-normal fs-6 lh-sm">
            <div class="row gx-4 gx-lg-5">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="nav card p-4 m-4 text-start">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('infolowongan')}}">Info Lowongan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('hasiltest')}}">Hasil Test</a>
                        </li>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-start">
                    @yield('content')
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

<style>
    .navitem i {
        display: block;
        color: rgb(0, 0, 0);
        text-align: center;
        padding: 10px 30px;
        text-decoration: none;
        border-radius: 8px;
        margin-left: 2.5px;
        margin-right: 2.5px;
    }
    .navitem i:hover {
        background-color: #ff9544;
        color: rgb(255, 255, 255);
        border-radius: 8px;
        margin-left: 2.5px;
        margin-right: 2.5px;
    }
    .navitem i.active {
        background-color: #666;
        color: rgb(255, 255, 255);
    }
</style>