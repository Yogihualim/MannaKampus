@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Homepage</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('homepage.create') }}">Input Foto Baru</a>
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
            <th>Nama Carousel</th>
            <th width="30%">Gambar</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        @if (count($homepages))
            @foreach ($homepages as $h)
            <tr>
                <td class="text-center">{{$h->id}}</td>
                <td>{{$h->nama_foto}}</td>
                <td>{{$h->image_home}} </td>
                <td class="text-center">
                    <form action="{{ route('homepage.destroy',$h->id)}}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('homepage.show',$h->id)}}">Show</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('homepage.edit',$h->id)}}">Edit</a>
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
