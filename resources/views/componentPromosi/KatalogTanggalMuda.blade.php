@extends('Promosi')

@section('contentPromosi')
    <ul class="breadcrumb text-dark ps-2">
        <li class="breadcrumb-item"><a href="id">Home</a></li>
        <li class="breadcrumb-item active"><u>Katalog Tanggal Muda</u></li>
    </ul>
    <hr>
    <div class="row">
        @if (count($katalog_tanggal_muda))
            @foreach ($katalog_tanggal_muda as $ktm=>$item)
            <div class="col-lg-6 col-md-6">
                <br>
                <img class="img" src="{{ url('public/katalogTanggalMuda/'.$item->image_katalog_TM) }}" width="100%" alt="..." title="">
            </div>
            @endforeach
        @else
            <div class="col-lg-6 col-md-6">
                <br>
                <img class="img" src="public/maintenance/No_Data.jpg" width="70%" alt="..." title="">
            </div>
        @endif
    </div>
@endsection
