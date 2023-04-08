@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Show Info Lowongan</h2>
        </div>
        <div>
            <a href="{{ route('hasil_test.index') }}" class="btn btn-secondary"> Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No:</strong>
                {{ $hasil_test->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Hasil Tests:</strong>
                {{ $hasil_test->nama_hasil_test }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>PDF:</strong>
                <iframe width="500px" src="{{ url('public/HasilTestFolder/'.$hasil_test->pdf_HT) }}">
            </div>
        </div>
    </div>
@endsection
