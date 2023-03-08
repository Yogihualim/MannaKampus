@extends('Karir')

@section('content')
    <ul class="breadcrumb text-dark ps-2">
        <li class="breadcrumb-item"><a href="id">Home</a></li>
        <li class="breadcrumb-item active"><u>Hasil Test</u></li>
    </ul>
    <hr>
    <br>
    <iframe src="{{ env("APP_URL")."/public/HasilTest.pdf" }}" frameborder="10" class="justify-content-center" width="100%" height="95%"></iframe>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
@endsection
