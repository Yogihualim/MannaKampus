@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Show Katalog Event</h2>
        </div>
        <div>
            <a href="{{ route('katalog_event.index') }}" class="btn btn-secondary"> Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No:</strong>
                {{ $katalog_jumat->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Katalog Event:</strong>
                {{ $katalog_jumat->nama_katalog_jumat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar:</strong>
                <img width="500px" src="{{ url('public/katalogEvent/'.$katalog_event->image_katalog_E) }}">
            </div>
        </div>
    </div>
@endsection
