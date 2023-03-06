@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Show Faculty</h2>
        </div>
        <div>
            <a href="{{ route('katalog_tanggal_muda.index') }}" class="btn btn-secondary"> Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No:</strong>
                {{ $katalog_tanggal_muda->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Katalog Tanggal Muda:</strong>
                {{ $katalog_tanggal_muda->nama_katalog_tanggal_muda }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gamabr:</strong>
                <img width="500px" src="{{ url('public/katalogTanggalMuda/'.$katalog_tanggal_muda->image_katalog_TM) }}">
            </div>
        </div>
    </div>
@endsection
