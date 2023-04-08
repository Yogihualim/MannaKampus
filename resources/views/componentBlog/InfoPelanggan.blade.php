@extends('Blog')

@section('contentBlog')
    <ul class="breadcrumb text-dark ps-2">
        <li class="breadcrumb-item"><a href="id">Home</a></li>
        <li class="breadcrumb-item active"><u>Info Pelanggan</u></li>
    </ul>
    <hr>
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <br>
            <img class="img" src="public/maintenance/No_Data.jpg" width="70%" alt="..." title="">
            {{-- <div class="card px-4 pb-4">
                <br>
                <img class="img" src="public/maintenance/UM3.png" style="height:40%; width:100%;" alt="..." title="">
                <div class="card-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">Some example text.</p>
                    <a href="#" class="btn btn-primary">See Profile</a>
                </div>
            </div> --}}
        </div>
        <div class="col-lg-6 col-md-6">
            <br>
        </div>
    </div>
@endsection
