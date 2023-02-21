<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulir Pengisian</title>

    @include('cssStyle.customercarePageCSS')
</head>
<body>
    <div class="row">
    <div class="col-lg-6 mb-lg-0">
        <img class="img ps-4 pt-4" src="{{ env("APP_URL")."/public/1.png" }}" width="90%" alt="..." title="">
        
        {{-- <img src="{{ URL::asset('1.png') }}" alt="..." title=""> --}}
    </div>
    <div class="col-lg-6 mb-5 mb-lg-0">
        <form>
            <h2 class="mt-2">Customer Care</h2>
            <!-- Name input -->
            <div class="form-floating mb-3 mt-3">
                <input type="form-control" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nama Lengkap</label>
            </div>

            <!-- Email input -->
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>

            {{-- Cabang Input --}}
            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>1. Manna Kampus Babarsari</option>
                    <option value="2">2. Manna Kampus C. Simanjuntak</option>
                    <option value="3">3. Manna Kampus M. Supeno</option>
                    <option value="4">4. Manna Kampus Palagan</option>
                    <option value="5">5. Manna Kampus Godean</option>
                    <option value="6">6. Manna Kampus Imogiri</option>
                    <option value="7">7. Manna Kampus Peralatan Rumah Tangga</option>
                    <option value="8">8. Manna Kampus Mini Pelemsewu</option>
                    <option value="9">9. Manna Kampus Mini Diro</option>
                    <option value="10">10. Manna Kampus Mini Minomartani</option>
                </select>
                <label for="floatingSelect">Pilih Cabang</label>
            </div>

            {{-- Cabang Input --}}
            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Layanan</option>
                    <option value="2">Fasilitas</option>
                    <option value="3">Harga</option>
                    <option value="4">Produk</option>
                    <option value="5">Karyawan</option>
                    <option value="6">Promo</option>
                    <option value="7">Lain-lain</option>
                </select>
                <label for="floatingSelect">Kategori Keluhan</label>
            </div>

            <!-- Message input -->
            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Pesan</label>
            </div>

            

            <!-- Checkbox -->
            {{-- <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                <label class="form-check-label" for="form4Example4">
                Send me a copy of this message
                </label>
            </div> --}}

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
        </form>
    </div>
    </div>
</body>
</html>