@extends('Promosi')

@section('contentPromosi')

    
        <div class="row">
            @foreach ($katalog_jumat as $k=>$item)
            <div class="col-lg-6 col-md-6">
                <br>
                <img class="img" src="{{ url('public/katalogs/'.$item->image_katalog_J) }}" width="100%" alt="..." title="">
            </div>
            @endforeach
        </div>
    
    
@endsection