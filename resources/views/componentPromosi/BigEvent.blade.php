@extends('Promosi')

@section('contentPromosi')
    <ul class="breadcrumb text-dark ps-2">
        <li class="breadcrumb-item"><a href="id">Home</a></li>
        <li class="breadcrumb-item active"><u>Big Event</u></li>
    </ul>
    <hr>
    <div class="row">
        @if (count($big_event))
            @foreach ($big_event as $be=>$item)
            <div class="col-lg-6 col-md-6">
                <br>
                <img class="img" src="{{ url('public/bigEvent/'.$item->image_BE) }}" width="100%" alt="..." title="">
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
