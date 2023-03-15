@extends('Admin.dashboard')
@section('Katalogs')
    <div class="d-flex justify-content-between mt-5 mb-5">
        <div>
            <h2>Big Event</h2>
        </div>
        <div>
            <a class="btn btn-success" href="{{ route('big_event.create') }}">Input Big Event Baru</a>
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
            <th>Nama Big Event</th>
            <th width="30%">Gambar</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        @if (count($big_event))
            @foreach ($big_event as $be)
            <tr>
                <td class="text-center">{{$be->id}}</td>
                <td>{{$be->nama_big_event}}</td>
                <td>{{$be->image_BE}} </td>
                <td class="text-center">
                    <form action="{{ route('big_event.destroy',$be->id)}}" method="POST">
                        <a class="btn btn-info btn-sm" href="{{ route('big_event.show',$be->id)}}">Show</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('big_event.edit',$be->id)}}">Edit</a>
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
