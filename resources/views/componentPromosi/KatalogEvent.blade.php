@extends('Promosi')

@section('contentPromosi')
    <ul class="breadcrumb text-dark ps-2">
        <li class="breadcrumb-item"><a href="id">Home</a></li>
        <li class="breadcrumb-item active"><u>Katalog Event</u></li>
    </ul>
    <hr>
    <div class="row">
        @if (count($katalog_event))
            @foreach ($katalog_event as $ke=>$item)
            <div class="col-lg-6 col-md-6">
                <br>
                <img class="img" src="{{ url('public/katalogEvent/'.$item->image_katalog_E) }}" width="100%" alt="..." title="">
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
