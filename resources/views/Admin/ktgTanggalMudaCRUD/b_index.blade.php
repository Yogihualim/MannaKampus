@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Katalog Tanggal Muda</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('katalog_tanggal_muda.create') }}">Create a New Faculty</a>
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
            <th>Nama Katalog Tanggal Muda</th>
            <th width="30%">Gambar</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        @if (count($katalog_tanggal_muda))
        @foreach ($katalog_tanggal_muda as $ktg_TM)
        <tr>
            <td class="text-center">{{$ktg_TM->id}}</td>
            <td>{{$ktg_TM->nama_katalog_tanggal_muda}}</td>
            <td>{{$ktg_TM->image_katalog_TM}} </td>
            <td class="text-center">
                <form action="{{ route('katalog_tanggal_muda.destroy',$ktg_TM->id)}}" method="POST">
                    <a class="btn btn-info btn-sm" href="{{ route('katalog_tanggal_muda.show',$ktg_TM->id)}}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('katalog_tanggal_muda.edit',$ktg_TM->id)}}">Edit</a>
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    {{ $ktg_TM->created_at->format('d/m/Y') }}
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
