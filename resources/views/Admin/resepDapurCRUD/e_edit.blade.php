@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Edit Foto Carousel</h2>
        </div>
        <div>
            <a href="{{ route('info_lowongan.index') }}" class="btn btn-secondary"> Back</a>
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

<form action="{{ route('info_lowongan.update',$info_lowongan->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Big Event:</strong>
                <input value="{{ $info_lowongan->nama_info_lowongan}}" type="text" name="nama_info_lowongan" class="form-control" placeholder="Nama Info Lowongan">
                <b>File Gambar</b><br/><input type="file" class="form-control" name="image_IL">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
