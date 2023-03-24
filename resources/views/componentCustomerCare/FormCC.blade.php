<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form CC</title>

    @include('assets.scriptLink')
    <link rel="stylesheet" type="text/css" href="{{ url('resources/css/mainStyle.css') }}">
</head>
<body>
    {{-- Navigasi Bar --}}
    @include('component.Navbar')

    {{-- Button To Top --}}
    @include('component.ButtonToTop')

    <br id="top"><br><br>
    {{-- Isi Sejarah --}}
    <div class="card p-4 m-4">
        <h2 class="fs-2">Customer Care - Manna Kampus (Mirota Kampus)</h2>
        <hr>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                    <div class="nav card py-2 px-1 text-start">
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('lokasi')}}"><i class="bi-archive pe-2 fw-2"></i>Lokasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Act" href="{{url('customercare')}}"><i class="bi-person-exclamation pe-2 fw-2"></i>Customer Care</a>
                        </li>
                    </div>
                    <br>
                </div>
            <div class="col-lg-4 mb-lg-0">
                <ul class="breadcrumb text-dark ps-2">
                            <li class="breadcrumb-item"><a href="id">Home</a></li>
                            <li class="breadcrumb-item active"><u>Customer Care</u></li>
                        </ul>
                        <hr>
                <img class="img ps-4 pt-4" src="public/maintenance/UM3.png" width="90%" alt="..." title="">

                {{-- <img src="{{ URL::asset('1.png') }}" alt="..." title=""> --}}
            </div>
            <div class="col-lg-5 mb-5 mb-lg-4">
                <br><hr>
                {{-- <form method="post" action="{{ route('postDataCus') }}" enctype="multipart/form-data">
                    @csrf
                    <h2 class="mt-2">Customer Care</h2> --}}
                    <!-- Name input -->
                    {{-- <div class="form-floating mb-3 mt-3">
                        <input name="name_cus" type="form-control" class="form-control" id="floatingInput" placeholder="Nama">
                        <label for="floatingInput">Nama Lengkap</label>
                    </div> --}}

                    <!-- Email input -->
                    {{-- <div class="form-floating mb-3">
                        <input name="email_cus" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div> --}}

                    {{-- Cabang Input --}}
                    {{-- <div class="form-floating mb-3">
                        <select name="pilih_cabang[]" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected value="MK Babarsari">
                                1. Manna Kampus Babarsari
                            </option>
                            <option value="MK C.Simanjuntak">
                                2. Manna Kampus C. Simanjuntak
                            </option>
                            <option value="MK M.Supeno">
                                3. Manna Kampus M. Supeno
                            </option>
                            <option value="MK Palagan">
                                4. Manna Kampus Palagan
                            </option>
                            <option value="MK Godean">
                                5. Manna Kampus Godean
                            </option>
                            <option value="MK Imogiri">
                                6. Manna Kampus Imogiri
                            </option>
                            <option value="MK Peralatan Rumah Tangga">
                                7. Manna Kampus Peralatan Rumah Tangga
                            </option>
                            <option value="MK Mini Pelemsewu">
                                8. Manna Kampus Mini Pelemsewu
                            </option>
                            <option value="MK Mini Diro">
                                9. Manna Kampus Mini Diro
                            </option>
                            <option value="MK Mini Minomartani">
                                10. Manna Kampus Mini Minomartani
                            </option>
                        </select>
                        <label for="floatingSelect">Pilih Cabang</label>
                    </div> --}}

                    {{-- Cabang Input --}}
                    {{-- <div class="form-floating mb-3">
                        <select name="keluhan[]" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected value="Layanan">Layanan</option>
                            <option value="Fasilitas">Fasilitas</option>
                            <option value="Harga">Harga</option>
                            <option value="Produk">Produk</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="Promo">Promo</option>
                            <option value="Lain-lain">Lain-lain</option>
                        </select>
                        <label for="floatingSelect">Kategori Keluhan</label>
                    </div> --}}

                    <!-- Message input -->
                    {{-- <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Pesan</label>
                    </div> --}}



                    <!-- Checkbox -->
                    {{-- <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                        <label class="form-check-label" for="form4Example4">
                        Send me a copy of this message
                        </label>
                    </div> --}}

                    <!-- Submit button -->
                    {{-- <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                </form> --}}
            </div>
        </div>
    </div>

    {{-- Footer Contact Us --}}
    @include('componentMain.FooterContact')

    {{-- Footer --}}
    @include('component.Footer')
</body>
</html>
