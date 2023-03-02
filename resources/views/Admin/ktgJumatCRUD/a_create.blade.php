@extends('Admin.dashboard')
@section('1.ktg_Jumat')
<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Create New Faculty</h2>
    </div>
    <div>
        <a href="{{ route('katalog_jumat.index') }}" class="btn btn-secondary">Back</a>
    </div>
</div>

@if ($errors->any())
    <div>
        <strong>Whoops!</strong> There were some problems with your input. <br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('katalog_jumat.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Faculty Name:</strong>
                <input type="text" name="nama_katalog_jumat" class="form-control" placeholder="katalog Name">
                <b>File Gambar</b><br/><input type="file" class="form-control" name="image_katalog_J">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection