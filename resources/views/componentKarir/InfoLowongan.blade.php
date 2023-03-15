@extends('Karir')

@section('content')
    <ul class="breadcrumb text-dark ps-2">
        <li class="breadcrumb-item"><a href="id">Home</a></li>
        <li class="breadcrumb-item active"><u>Info Lowongan</u></li>
    </ul>
    <hr>
    <div class="row">
        @if (count($info_lowongan))
            @foreach ($info_lowongan as $il=>$item)
            <div class="col-lg-6 col-md-6">
                <br>
                <img class="img" src="{{ url('public/infoLowongan/'.$item->image_IL) }}" width="100%" alt="..." title="">
            </div>
            @endforeach
        @else
            <div class="col-lg-6 col-md-6">
                <br>
                <img class="img" src="public/maintenance/UM3.png" width="70%" alt="..." title="">
            </div>
        @endif
        {{-- <div class="col-lg-6 col-md-6">
            <br>
            <img class="img" src="public/infolowongan/L-1.png" width="100%" alt="..." title="">
        </div>
        <div class="col-lg-6 col-md-6">
            <br>
            <img class="img" src="public/infolowongan/L-2.png" width="100%" alt="..." title="">
        </div> --}}
    </div>
@endsection
