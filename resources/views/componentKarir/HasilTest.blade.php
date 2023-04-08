@extends('Karir')

@section('content')
    <ul class="breadcrumb text-dark ps-2">
        <li class="breadcrumb-item"><a href="id">Home</a></li>
        <li class="breadcrumb-item active"><u>Hasil Test</u></li>
    </ul>
    <hr>
    <div class="row">
        @if (count($hasil_test))
            @foreach ($hasil_test as $ht=>$item)
            <div class="col">
                <br>
                <iframe src="{{ url('public/HasilTestFolder/'.$item->pdf_HT) }}" frameBorder="0" scrolling="auto" width=100% height=600 alt="..." title=""></iframe>
            </div>
            @endforeach
        @else
            <div class="col">
                <br>
                <img class="img" src="public/maintenance/No_Data.jpg" width="70%" alt="..." title="">
            </div>
        @endif
    </div>
@endsection
