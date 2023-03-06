@extends('Promosi')

@section('contentPromosi')
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
                <img class="img" src="public/maintenance/UM3.png" width="70%" alt="..." title="">
            </div>
        @endif
    </div>
@endsection
