@extends('Promosi')

@section('contentPromosi')
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
                <img class="img" src="public/maintenance/UM3.png" width="70%" alt="..." title="">
            </div>
        @endif
    </div>
@endsection
