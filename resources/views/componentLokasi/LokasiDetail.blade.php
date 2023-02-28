{{-- Lokasi Detail --}}
@extends('AboutUs')

@section('aboutUs')
<hr>
    <h5 class="fw-normal fs-6 lh-sm">
        <div class="row gx-8 gx-lg-10">
            <div class="col-lg-4 col-md-6">
                <div class="nav card py-2 px-1 text-start">
                    <li class="nav-item">
                        <a class="nav-link" id="Act" href="{{url('lokasi/1')}}"><i class="bi-signpost-split pe-2 fw-2"></i>Manna Kampus Babarsari</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Act" href="{{url('lokasi/2')}}"><i class="bi-signpost-split pe-2 fw-2"></i>Manna Kampus C. Simanjuntak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Act" href="{{url('lokasi/3')}}"><i class="bi-signpost-split pe-2 fw-2"></i>Manna Kampus M. Supeno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Act" href="{{url('lokasi/4')}}"><i class="bi-signpost-split pe-2 fw-2"></i>Manna Kampus Palagan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Act" href="{{url('lokasi/5')}}"><i class="bi-signpost-split pe-2 fw-2"></i>Manna Kampus Godean</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Act" href="{{url('lokasi/6')}}"><i class="bi-signpost-split pe-2 fw-2"></i>Manna Kampus Imogiri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Act" href="{{url('lokasi/7')}}"><i class="bi-signpost-split pe-2 fw-2"></i>Manna Kampus Mini Pelemsewu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Act" href="{{url('lokasi/8')}}"><i class="bi-signpost-split pe-2 fw-2"></i>Manna Kampus Mini Diro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Act" href="{{url('lokasi/9')}}"><i class="bi-signpost-split pe-2 fw-2"></i>Manna Kampus Mini Minomartani</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="Act" href="{{url('lokasi/10')}}"><i class="bi-signpost-split pe-2 fw-2"></i>Manna Kampus Peralatan Rumah Tangga</a>
                    </li>
                </div>
            </div>
            <div class="col-lg-8 col-md-2 text-start">
                <hr>
            {{-- 1. Misi Mirota Kampus --}}
                @yield('lokasiCabang')
            </div>
        </div>
    </h5>
    

{{-- Style --}}
<style>
    #more {
        display: none;
    }

    /* .text-center {
        text-align: center;
    }
    #map {
        width: "100%";
        height: 400px;
    } */
</style>

{{-- <script>
    function read() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var rmBtn = document.getElementById("rmBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            rmBtns.innerHTML = "more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            rmBtn.innerHTML = "less";
            moreText.style.display = "inline";
        }
    }
</script> --}}

@endsection