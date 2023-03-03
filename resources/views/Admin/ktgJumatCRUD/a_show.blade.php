@extends('Admin.dashboard')
@section('1.ktg_Jumat')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Show Faculty</h2>
        </div>
        <div>
            <a href="{{ route('katalog_jumat.index') }}" class="btn btn-secondary"> Back</a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty ID:</strong>
                {{ $katalog_jumat->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty ID:</strong>
                {{ $katalog_jumat->nama_katalog_jumat }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty ID:</strong>
                <img width="500px" src="{{ url('public/katalogs/'.$katalog_jumat->image_katalog_J) }}">
            </div>
        </div>
    </div>
@endsection