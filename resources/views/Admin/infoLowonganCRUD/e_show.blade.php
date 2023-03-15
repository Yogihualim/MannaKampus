@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Show Info Lowongan</h2>
        </div>
        <div>
            <a href="{{ route('info_lowongan.index') }}" class="btn btn-secondary"> Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No:</strong>
                {{ $info_lowongan->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Big Event:</strong>
                {{ $info_lowongan->nama_info_lowongan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar:</strong>
                <img width="500px" src="{{ url('public/infoLowongan/'.$info_lowongan->image_IL) }}">
            </div>
        </div>
    </div>
@endsection
