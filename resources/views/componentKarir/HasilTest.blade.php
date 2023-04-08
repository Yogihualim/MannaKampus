@extends('Karir')

@section('content')
    <ul class="breadcrumb text-dark ps-2">
        <li class="breadcrumb-item"><a href="id">Home</a></li>
        <li class="breadcrumb-item active"><u>Hasil Test</u></li>
    </ul>
    <hr>
    <br>
    {{-- <iframe src="{{ env("APP_URL")."/public/HasilTest.pdf" }}" frameborder="10" class="justify-content-center" width="100%" height="95%"></iframe>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br> --}}

    <div class="row">
        @if (count($hasil_test))
            @foreach ($hasil_test as $ht=>$item)
            <div class="col-lg-6 col-md-6">
                <br>
                <iframe src="{{ url('public/HasilTestFolder/'.$item->pdf_HT) }}" class="justify-content-center" width="100%" height="95%" alt="..." title="">
            </div>
            @endforeach
        @else
            <div class="col-lg-6 col-md-6">
                <br>
                <img class="img" src="public/maintenance/UM3.png" width="70%" alt="..." title="">
            </div>
        @endif
    </div>
@endsection
