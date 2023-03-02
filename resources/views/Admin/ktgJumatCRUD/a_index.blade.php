@extends('Admin.dashboard')
@section('1.ktg_Jumat')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Katalog Jumat</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('katalog_jumat.create') }}">Create a New Faculty</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Foto</th>
            <th width="30%">Gambar</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        @if (count($katalog_jumat))
        @foreach ($katalog_jumat as $ktg_J)
        <tr>
            <td class="text-center">{{$ktg_J->id}}</td>
            <td>{{$ktg_J->nama_katalog_jumat}}</td>
            <td>{{$ktg_J->image_katalog_J}} </td>
            <td class="text-center">
                <form action="{{ route('katalog_jumat.destroy',$ktg_J->id)}}" method="POST">
                    <a class="btn btn-info btn-sm" href="{{ route('katalog_jumat.show',$ktg_J->id)}}">Show</a>
                    
                    <a class="btn btn-primary btn-sm" href="{{ route('katalog_jumat.edit',$ktg_J->id)}}">Edit</a>
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td align="center" colspan="3">Empty data!!! Have a nice day :)</td>
        </tr>
        @endif
    </table>
@endsection