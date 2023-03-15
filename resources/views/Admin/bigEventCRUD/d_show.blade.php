@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Show Katalog Event</h2>
        </div>
        <div>
            <a href="{{ route('big_event.index') }}" class="btn btn-secondary"> Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No:</strong>
                {{ $big_event->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Big Event:</strong>
                {{ $big_event->nama_foto }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar:</strong>
                <img width="500px" src="{{ url('public/bigEvent/'.$big_event->image_BE) }}">
            </div>
        </div>
    </div>
@endsection
