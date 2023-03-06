@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Edit Gambar</h2>
        </div>
        <div>
            <a href="{{ route('katalog_tanggal_muda.index') }}" class="btn btn-secondary"> Back</a>
        </div>
    </div>

    @if ($errors->any())
    <div>
        <strong>Whoops!</strong> Sepertinya inputan anda ada yang salah. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="{{ route('katalog_tanggal_muda.update',$katalog_tanggal_muda->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Katalog Tanggal Muda:</strong>
                <input value="{{ $katalog_jumat->nama_katalog_jumat }}" type="text" name="nama_katalog_tanggal_muda" class="form-control" placeholder="Nama Katalog">
                <b>File Gambar</b><br/><input type="file" class="form-control" name="image_katalog_TM">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
