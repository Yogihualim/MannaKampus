@extends('Admin.dashboard')
@section('Katalogs')
<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Buat Katalog Event Baru</h2>
    </div>
    <div>
        <a href="{{ route('big_event.index') }}" class="btn btn-secondary">Back</a>
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

<form action="{{ route('big_event.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Big Event:</strong>
                <input type="text" name="nama_big_event" class="form-control" placeholder="katalog Name">
                <b>File Gambar</b><br/><input type="file" class="form-control" name="image_BE">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
