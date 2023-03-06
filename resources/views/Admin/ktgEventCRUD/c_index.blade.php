@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Katalog Event</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('katalog_event.create') }}">Buat Katalog Jumat Baru</a>
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
            <th>Nama Katalog Event</th>
            <th width="30%">Gambar</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        @if (count($katalog_event))
        @foreach ($katalog_event as $ktg_E)
        <tr>
            <td class="text-center">{{$ktg_E->id}}</td>
            <td>{{$ktg_E->nama_katalog_event}}</td>
            <td>{{$ktg_E->image_katalog_E}} </td>
            <td class="text-center">
                <form action="{{ route('katalog_event.destroy',$ktg_E->id)}}" method="POST">
                    <a class="btn btn-info btn-sm" href="{{ route('katalog_event.show',$ktg_E->id)}}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('katalog_event.edit',$ktg_E->id)}}">Edit</a>
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
