@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Info Lowongan</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('info_lowongan.create') }}">Input Big Event Baru</a>
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
            <th>Nama Info Lowongan</th>
            <th width="30%">Gambar</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        @if (count($info_lowongan))
            @foreach ($info_lowongan as $il)
            <tr>
                <td class="text-center">{{$il->id}}</td>
                <td>{{$il->nama_info_lowongan}}</td>
                <td>{{$il->image_IL}} </td>
                <td class="text-center">
                    <form action="{{ route('info_lowongan.destroy',$il->id)}}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('info_lowongan.show',$il->id)}}">Show</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('info_lowongan.edit',$il->id)}}">Edit</a>
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        @else
        <tr>
            <td align="center" colspan="4">Data Kosong!!! Have a nice day :)</td>
        </tr>
        @endif
    </table>
@endsection
